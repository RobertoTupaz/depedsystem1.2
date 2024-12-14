<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personnel\employee;
use App\Http\Controllers\pdf\Generate;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('//192.168.1.13/personnel');
});

Route::get('exel/upload', [employee::class, 'index']);
Route::post('exel/upload', [employee::class, 'importExelData'])->name('exel.upload');
Route::get('nosa/pdf/{date}/{full_name}/{school}/{district}/{effectivity}/{position}/{salary_grade}/{step}/{adjusted_sg}/{adjusted_step}/{adjusted_salary}', [Generate::class, 'nosa'])->name('nosa.pdf');
Route::get('certification/pdf/{full_name}/{position}/{school_district}/{status}', [Generate::class, 'certification'])->name('certification.pdf');
Route::get('compensation/pdf/{date}/{day}/{full_name}/{position}/{school}/{district}/{annual_salary}/{aca_pera}/{bonus}/{chalk_allowance}/{clothing_allowance}/{pei}/{hazard_pay}', [Generate::class, 'compensation'])->name('compensation.pdf');
Route::get('special_order/pdf/{date}/{order_number}/{full_name}/{position}/{school}/{district}/{compensation}/{effectivity}/{reason}/{code}', [Generate::class, 'specialOrder'])->name('special_order.pdf');
Route::get('certificate_employment/pdf/{full_name}/{position}/{school}/{district}/{day}/{month_year}', [Generate::class, 'certificateOfEmployment'])->name('certificate_employment.pdf');