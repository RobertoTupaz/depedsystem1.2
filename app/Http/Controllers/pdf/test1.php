<?php

namespace App\Http\Controllers\pdf;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class test1 extends Controller
{
    public function print($data) { 
        $pdf = Pdf::loadView('pdf/test', ['recipient' => 'John Doe']);
        return $pdf->download('formal_letter.pdf'); 
    }
}
