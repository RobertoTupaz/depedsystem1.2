<?php

namespace App\Http\Controllers\personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Maatwebsite\Excel\Facades\Excel;

class employee extends Controller
{
    public function index() {
        return view('personnel.index');
    }

    public function importExelData(Request $request) {
        $request->validate([
            'import_file' => ['required', 'file'],
        ]);
        
        Excel::import(new EmployeeImport, $request->file('import_file'));

        return response()->json(['message' => 'File uploaded successfully!']);
    }
}