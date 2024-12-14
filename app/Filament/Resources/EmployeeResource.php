<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Models\Employee\Employee;
use DateTime;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Facades\Filament;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeeImport;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use FontLib\Table\Type\name;
use NumberFormatter;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('item_number'),
                Forms\Components\TextInput::make('organizational_unit'),
                Forms\Components\TextInput::make('full_name'),
                Forms\Components\TextInput::make('last_name'),
                Forms\Components\TextInput::make('first_name'),
                Forms\Components\TextInput::make('middle_name'),
                Forms\Components\TextInput::make('position_title'),
                Forms\Components\TextInput::make('salary_grade'),
                Forms\Components\TextInput::make('authorized_anual_salary'),
                Forms\Components\TextInput::make('actual_anual_salary'),
                Forms\Components\TextInput::make('step'),
                Forms\Components\TextInput::make('area_code'),
                Forms\Components\TextInput::make('area_type'),
                Forms\Components\TextInput::make('level'),
                Forms\Components\TextInput::make('count'),
                Forms\Components\TextInput::make('sex'),
                Forms\Components\TextInput::make('date_of_birth'),
                Forms\Components\TextInput::make('tin'),
                Forms\Components\TextInput::make('date_of_original_appointment'),
                Forms\Components\TextInput::make('date_of_last_promotion_or_appointment'),
                Forms\Components\TextInput::make('status'),
                Forms\Components\TextInput::make('civil_service_eligibility'),
                Forms\Components\TextInput::make('emp'),
                Forms\Components\TextInput::make('vice'),
                Forms\Components\TextInput::make('department'),
                Forms\Components\TextInput::make('reclass_item'),
                Forms\Components\TextInput::make('category_region'),
                Forms\Components\TextInput::make('school'),
                Forms\Components\TextInput::make('district'),
                Forms\Components\TextInput::make('old_item'),
                Forms\Components\TextInput::make('ct_item'),
                Forms\Components\TextInput::make('assignment'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('item_number')->searchable(),
                Tables\Columns\TextColumn::make('last_name')->searchable(),
                Tables\Columns\TextColumn::make('first_name')->searchable(),
            ])
            ->filters([
                
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Action::make('print_cert_compensation')
                    ->label(_('COMPENSATION CERT'))
                    ->icon('heroicon-o-printer')
                    ->form([
                        DatePicker::make('date')
                        ->format('m-d-Y')
                        ->default(now()),
                        TextInput::make('day')->default(function() {
                            $date2 = date('m-d-Y');
                            $months2 = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
                            $dateTime2 = DateTime::createFromFormat('m-d-Y', $date2);
                            $day2 = $dateTime2->format('d');
                            $month2 = $dateTime2->format('m');
                            $year2 = $dateTime2->format('Y');

                            function addOrdinalSuffix2($number) { 
                                // Handle special cases like 11th, 12th, and 13th 
                                if (in_array(($number % 100), [11, 12, 13])) { 
                                    return $number . 'th'; 
                                }
                                // Determine the suffix for numbers ending in 1, 2, 3 
                                switch ($number % 10) { 
                                    case 1: return $number . 'st'; 
                                    case 2: return $number . 'nd'; 
                                    case 3: return $number . 'rd'; 
                                    default: return $number . 'th'; 
                                } 
                            }
                            
                            return addOrdinalSuffix2($day2);
                        })
                        ->label('Given Day'),
                        TextInput::make('full_name')->default(function ($record) {
                            $middleInnitial = strtoupper(substr($record['middle_name'], 0, 1));
                            return strtoupper($record['last_name']).', '.strtoupper($record['first_name']).' '.$middleInnitial.'.';
                        }),
                        TextInput::make('position')->default(fn ($record) => $record['position_title']),
                        TextInput::make('school')->default(fn ($record) => $record['school']),
                        TextInput::make('district')->default(fn ($record) => $record['district']),
                        TextInput::make('annual_salary')
                        ->label('Basic Annual Salary')
                        ->default(function ($record) {
                            $monthlySalary = $record['actual_anual_salary'];
                            return number_format($monthlySalary, 2, '.', ',');
                        }),
                        TextInput::make('aca_pera')
                        ->label('ACA/ PERA')
                        ->default("0.00"),
                        TextInput::make('bonus')
                        ->label('Bonus')
                        ->default("0.00"),
                        TextInput::make('chalk_alowance')
                        ->label('Chalk Allowance')
                        ->default("0.00"),
                        TextInput::make('clothing_allowance')
                        ->label('Clothing Allowance')
                        ->default("0.00"),
                        TextInput::make('pei')
                        ->label('PEI')
                        ->default("0.00"),
                        TextInput::make('hazard_pay')
                        ->label('Hazard Pay')
                        ->default("0.00"),
                    ])
                    ->action(function($data) {
                        $datas = [
                            'date' => $data['date'],
                            'day' => $data['day'],
                            'full_name' => $data['full_name'],
                            'position' => $data['position'],
                            'school' => $data['school'],
                            'district' => $data['district'],
                            'annual_salary' => $data['annual_salary'],
                            'aca_pera' => $data['aca_pera'],
                            'bonus' => $data['bonus'],
                            'chalk_allowance' => $data['chalk_alowance'],
                            'clothing_allowance' => $data['clothing_allowance'],
                            'pei' => $data['pei'],
                            'hazard_pay' => $data['hazard_pay'],
                        ];

                        return redirect()->route('compensation.pdf', $datas);
                    }),
                    Action::make('print_special_order')
                    ->label(_('SPECIAL ORDER'))
                    ->icon('heroicon-o-printer')
                    ->form([
                        TextInput::make('date')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');

                            return $months[$month].' '.$day.', '.$year;
                        })
                        ->label('Date created'),
                        TextInput::make('order_number')
                        ->default(281),
                        TextInput::make('full_name')->default(function ($record) {
                            $middleInnitial = strtoupper(substr($record['middle_name'], 0, 1));
                            return strtoupper($record['last_name']).', '.strtoupper($record['first_name']).' '.$middleInnitial.'.';
                        }),
                        TextInput::make('position')->default(fn ($record) => $record['position_title']),
                        TextInput::make('school')->default(fn ($record) => $record['school']),
                        TextInput::make('district')->default(fn ($record) => $record['district']),
                        TextInput::make('compensation')
                        ->default(0),
                        TextInput::make('effectivity')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');
                            
                            return $months[$month].' '.$day.', '.$year;
                        }),
                        Select::make('reason')
                        ->options([
                            'retirement' => 'Retirement',
                            'deceased' => 'Deceased',
                            'resignation' => 'Resignation',
                        ])
                        ->default('retirement'),
                        TextInput::make('code')
                        ->default('OSEC-DECSB-TCH2-660029-2017'),
                    ])
                    ->action(function($data) {
                        $datas = [
                            'date' => $data['date'],
                            'order_number' => $data['order_number'],
                            'full_name' => $data['full_name'],
                            'position' => $data['position'],
                            'school' => $data['school'],
                            'district' => $data['district'],
                            'compensation' => $data['compensation'],
                            'effectivity' => $data['effectivity'],
                            'reason' => $data['reason'],
                            'code' => $data['code'],
                        ];

                        return redirect()->route('special_order.pdf', $datas);
                    }),
                    Action::make('print_cert_emloyment')
                    ->label(_('EMPLOYMENT CERT'))
                    ->icon('heroicon-o-printer')
                    ->form([
                        TextInput::make('full_name')->default(function ($record) {
                            $middleInnitial = strtoupper(substr($record['middle_name'], 0, 1));
                            return strtoupper($record['last_name']).', '.strtoupper($record['first_name']).' '.$middleInnitial.'.';
                        }),
                        TextInput::make('position')->default(fn ($record) => $record['position_title']),
                        TextInput::make('school')->default(fn ($record) => $record['school']),
                        TextInput::make('district')->default(fn ($record) => $record['district']),
                        TextInput::make('day')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');

                            function addOrdinalSuffix($number) { 
                                // Handle special cases like 11th, 12th, and 13th 
                                if (in_array(($number % 100), [11, 12, 13])) { 
                                    return $number . 'th'; 
                                } 
                                // Determine the suffix for numbers ending in 1, 2, 3 
                                switch ($number % 10) { 
                                    case 1: return $number . 'st'; 
                                    case 2: return $number . 'nd'; 
                                    case 3: return $number . 'rd'; 
                                    default: return $number . 'th'; 
                                } 
                            }
                            
                            return addOrdinalSuffix($day);
                        }),
                        TextInput::make('month_year')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');
                            
                            return $months[$month].' '.$year;
                        })
                        ->label('Month&Year'),
                    ])
                    ->action(function($data) {
                        $datas = [
                            'full_name' => $data['full_name'],
                            'position' => $data['position'],
                            'school' => $data['school'],
                            'district' => $data['district'],
                            'day' => $data['day'],
                            'month_year' => $data['month_year'],
                        ];

                        return redirect()->route('certificate_employment.pdf', $datas);
                    }),
                    Action::make('print_certification')
                    ->label(_('CERTIFICATION'))
                    ->icon('heroicon-o-printer')
                    ->form([
                        TextInput::make('full_name')->default(function ($record) {
                            $middleInnitial = strtoupper(substr($record['middle_name'], 0, 1));
                            return strtoupper($record['first_name']).' '.$middleInnitial.'. '.strtoupper($record['last_name']);
                        }),
                        TextInput::make('position')->default(fn ($record) => $record['position_title']),
                        TextInput::make('school_district')->default(function($record) {
                            return $record['school'].', '.$record['district'];
                        }),
                        Select::make('status')
                        ->options([
                            'retirement' => 'Retirement',
                            'deceased' => 'Deceased',
                            'resignation' => 'Resignation',
                        ])
                        ->default('retirement'),
                    ])
                    ->action(function(array $data) {
                        $datas = [
                            'full_name' => $data['full_name'],
                            'position' => $data['position'],
                            'school_district' => $data['school_district'],
                            'status' => $data['status'],
                        ];

                        return redirect()->route('certification.pdf', $datas);
                    }),
                    Action::make('print_nosa')
                    ->label(_('NOSA'))
                    ->icon('heroicon-o-printer')
                    ->form([
                        TextInput::make('date')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');

                            return $day.'-'.$months[$month].'-'.$year;
                        }),
                        TextInput::make('full_name')->default(function ($record) {
                            $middleInnitial = strtoupper(substr($record['middle_name'], 0, 1));
                            return strtoupper($record['first_name']).' '.$middleInnitial.'. '.strtoupper($record['last_name']);
                        }),
                        TextInput::make('school')->default(fn ($record) => $record['school']),
                        TextInput::make('district')->default(fn ($record) => $record['district']),
                        // TextInput::make('salary')->default(function ($record) {
                        //     $monthlySalary = $record['actual_anual_salary']/12;
                        //     return number_format($monthlySalary, 2, '.', ',');
                        // }),
                        TextInput::make('effectivity')->default(function() {
                            $date = date('m-d-Y');
                            $months = ['NULL', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',];
                            $dateTime = DateTime::createFromFormat('m-d-Y', $date);
                            $day = $dateTime->format('d');
                            $month = $dateTime->format('m');
                            $year = $dateTime->format('Y');
                            
                            return $day.'-'.$months[$month].'-'.$year;
                        }),
                        TextInput::make('position')->default(fn ($record) => $record['position_title']),
                        TextInput::make('salary_grade')->default(fn ($record) => $record['salary_grade']),
                        TextInput::make('step')->default(fn ($record) => $record['step']),
                        TextInput::make('adjusted_sg')->default(fn ($record) => $record['salary_grade']),
                        TextInput::make('adjusted_step')->default(fn ($record) => $record['step']),
                        // TextInput::make('salary2')->default(function ($record) {
                        //     $monthlySalary = $record['actual_anual_salary']/12;
                        //     return number_format($monthlySalary, 2, '.', ',');
                        // }),
                        TextInput::make('adjusted_salary')->default(function ($record) {
                            $monthlySalary = $record['actual_anual_salary']/12;
                            return number_format($monthlySalary, 2, '.', ',');
                        }),
                    ])
                    ->action(function(array $data) {
                        $datas = [
                            'date' => $data['date'],
                            'full_name' => $data['full_name'],
                            'school' => $data['school'],
                            'district' => $data['district'],
                            // 'salary' => $data['salary'],
                            'effectivity' => $data['effectivity'],
                            'position' => $data['position'],
                            'salary_grade' => $data['salary_grade'],
                            'step' => $data['step'],
                            'adjusted_sg' => $data['adjusted_sg'],
                            'adjusted_step' => $data['adjusted_step'],
                            // 'salary2' => $data['salary2'],
                            'adjusted_salary' => $data['adjusted_salary'],
                        ];

                        return redirect()->route('nosa.pdf', $datas);
                    })
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                Action::make('uploadExcel')
                    ->label('Upload Excel')
                    ->icon('heroicon-o-arrow-up-on-square')
                    ->form([
                        FileUpload::make('import_file')
                        ->getUploadedFileNameForStorageUsing(
                            fn (TemporaryUploadedFile $file): string => (string) str('')
                                ->prepend('psipop.xlsx'),
                        )
                    ])
                    ->action(function() {
                        $importExel = Excel::import(new EmployeeImport, public_path('\storage\psipop.xlsx'));
                        
                        if($importExel) {
                            Notification::make()
                            ->title('Import Sucessfully')
                            ->icon('heroicon-o-document-text')
                            ->success()
                            ->send();
                        } else {
                            Notification::make()
                            ->title('Error file importing, Please contact the developer!')
                            ->icon('heroicon-o-document-text')
                            ->danger()
                            ->send();
                        }
                    })
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageEmployees::route('/'),
        ];
    }
}