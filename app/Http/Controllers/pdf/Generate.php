<?php

namespace App\Http\Controllers\Pdf;

use App\Http\Controllers\Controller;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Barryvdh\DomPDF\Facade\Pdf;
use DateTime;
use Illuminate\Http\Request;
use NumberFormatter;

use Knp\Snappy\Pdfs;

class Generate extends Controller
{
    public function nosa($date, $full_name, $school, $district, /*$salary, */$effectivity, $position, $salary_grade, $step, $adjusted_sg, $adjusted_step, /*$salary2, */$adjusted_salary) { 
        $nosa = [
            'date' => $date,
            'full_name' => $full_name,
            'school' => $school,
            'district' => $district,
            // 'salary' => $salary,
            'effectivity' => $effectivity,
            'position' => $position,
            'salary_grade' => $salary_grade,
            'step' => $step,
            'adjusted_sg' => $adjusted_sg,
            'adjusted_step' => $adjusted_step,
            // 'salary2' => $salary2,
            'adjusted_salary' => $adjusted_salary,
            'title' => "NOSA",
        ];

        $pdf = SnappyPdf::loadView('pdf/nosa', $nosa);
        $pdf->setOption('page-size', 'A4');
        $pdf->setOption('margin-top', 8);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('no-background', true);

        return $pdf->download('nosa.pdf');
    }

    public function certification($full_name, $position, $school_district, $status) {
        
        $datas = [
            'full_name' => $full_name,
            'position' => $position,
            'school_district' => $school_district,
            'status' => $status,
            'title' => "CERTIFICATION",
            'full_name_space' => substr_count($full_name, ' '),
            'position_space' => substr_count($position, ' '),
            'school_district_space' => substr_count($school_district, ' '),
        ];

        // $pdf = Pdf::loadView('pdf/certification', $datas)
        // ->setOption([
        //     'fontDir' => public_path('/fonts'),
        //     'fontCache' => public_path('/fonts'),
        //     'defaultFont' => 'Poppins'
        // ]);
        // return $pdf->download('certification.pdf');

        $pdf = SnappyPdf::loadView('pdf/certification', $datas);
        $pdf->setOption('page-size', 'A4');
        $pdf->setOption('margin-top', 8);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('no-background', true);

        return $pdf->download('certification.pdf');
    }

    public function certificateOfEmployment($full_name, $position, $school, $district, $day, $month_year) {
        $datas = [
            'full_name' => $full_name,
            'position' => $position,
            'school' => $school,
            'district' => $district,
            'day' => $day,
            'month_year' => $month_year,
            'title' => "CERTIFICATE OF EMPLOYMENT",
            'full_name_space' => substr_count($full_name, ' '),
            'position_space' => substr_count($position, ' '),
            'school_space' => substr_count($school, ' '),
        ];

        // $pdf = Pdf::loadView('pdf/certificate_employment', $datas)
        // ->setOption([
        //    'fontDir' => public_path('/fonts'),
        //    'fontCache' => public_path('/fonts'),
        //    'defaultFont' => 'Poppins'
        // ]);
        // return $pdf->download('certificate_employment.pdf');

        $pdf = SnappyPdf::loadView('pdf/certificate_employment', $datas);
        $pdf->setOption('page-size', 'A4');
        $pdf->setOption('margin-top', 8);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('no-background', true);

        return $pdf->download('certificate_employment.pdf');
    }

    public function compensation($date, $day, $full_name, $position, $school, $district, $annual_salary, $aca_pera, $bonus, $chalk_allowance, $clothing_allowance, $pei, $hazard_pay) {
        $total = (float)str_replace(',', '', $annual_salary) + (float)str_replace(',', '', $aca_pera) + (float)str_replace(',', '', $bonus) 
                + (float)str_replace(',', '', $chalk_allowance) + (float)str_replace(',', '', $clothing_allowance) + (float)str_replace(',', '', $pei) 
                + (float)str_replace(',', '', $hazard_pay)
        ;

        $months = ['NULL', 'January', 'February', 'Marh', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',];
        $dateTime = DateTime::createFromFormat('m-d-Y', $date);
        $day2 = $dateTime->format('d');
        $month = $dateTime->format('m');
        $year = $dateTime->format('Y');


        $datas = [
            'date' => $months[$month].' '.$day2.', '.$year,
            'day' => $day,
            'full_name' => $full_name,
            'position' => $position,
            'school' => $school,
            'district' => $district,
            'annual_salary' => $annual_salary,
            'aca_pera' => $aca_pera,
            'bonus' => $bonus,
            'chalk_allowance' => $chalk_allowance,
            'clothing_allowance' => $clothing_allowance,
            'pei' => $pei,
            'hazard_pay' => $hazard_pay,
            'total' => number_format($total, 2, '.', ','),
            'title' => "COMPENSATION",
            'full_name_space' => substr_count($full_name, ' '),
            'position_space' => substr_count($position, ' '),
            'school_space' => substr_count($school, ' '),
        ];

        // $pdf = Pdf::loadView('pdf/coc', $datas)
        // ->setOption([
        //     'fontDir' => public_path('/fonts'),
        //     'fontCache' => public_path('/fonts'),
        //     'defaultFont' => 'DejaVuSans'
        // ]);

        // return $pdf->download('coc.pdf');

        $pdf = SnappyPdf::loadView('pdf/coc', $datas);
        $pdf->setOption('page-size', 'A4');
        $pdf->setOption('margin-top', 8);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('no-background', true);

        return $pdf->download('coc.pdf');
    }
    public function specialOrder($date, $order_number, $full_name, $position, $school, $district, $compensation, $effectivity, $reason, $code) {
        $compensation = (int)str_replace(',', '', $compensation);
        $spellOutNumber = new NumberFormatter("en", NumberFormatter::SPELLOUT);
 
        $datas = [
            'date' => $date,
            'order_number' => $order_number,
            'full_name' => $full_name,
            'position' => $position,
            'school' => $school,
            'district' => $district,
            'compensation' => $compensation,
            'spellOutCompensation' => ucwords($spellOutNumber->format($compensation)), 
            'effectivity' => $effectivity,
            'reason' => strtoupper($reason),
            'code' => $code,
            'title' => 'Special Order',
        ];

        // $pdf = Pdf::loadView('pdf/special_order', $datas)
        // ->setOption([
        //     'fontDir' => public_path('/fonts'),
        //     'fontCache' => public_path('/fonts'),
        //     'defaultFont' => 'Poppins'
        // ]);
        // return $pdf->download('SpecialOrder.pdf');

        $pdf = SnappyPdf::loadView('pdf/special_order', $datas);
        $pdf->setOption('page-size', 'A4');
        $pdf->setOption('margin-top', 8);
        $pdf->setOption('margin-bottom', 0);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setOption('no-background', true);

        return $pdf->download('special_order.pdf');
    }
}
