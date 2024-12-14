<?php

namespace App\Imports;

use App\Models\Employee\Employee;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class EmployeeImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {

            Employee::create([
                'stats' => $row[0],
                'page' => null,
                'page_no' => null,
                'organizational_unit' => $row[3],
                'salary_grade' => $row[4],
                'authorized_anual_salary' => $row[5],
                'actual_anual_salary' => $row[6],
                'step' => $row[7],
                'area_code' => $row[8],
                'area_type' => $row[9],
                'level' => $row[10],
                'position_title' => $row[11],
                'count' => null,
                'item_number' => $row[13],
                'last_name' => $row[14],
                'first_name' => $row[15],
                'middle_name' => $row[16],
                'sex' => $row[17],
                'date_of_birth' => date('Y-m-d', strtotime(str_replace('/', '-', $row[18]))),
                'tin' => $row[19],
                'date_of_original_appointment' => date('Y-m-d', strtotime(str_replace('/', '-', $row[20]))),
                'date_of_last_promotion_or_appointment' => date('Y-m-d', strtotime(str_replace('/', '-', $row[21]))),
                'status' => $row[22],
                'civil_service_eligibility' => $row[23],
                'emp' => $row[24],
                'salary_grade2' => $row[25],
                'step2' => $row[26],
                'actual_anual_salary2' => $row[27],
                'full_name' => $row[28],
                'vice' => null,
                'department' => $row[31],
                'item_number2' => $row[32],
                'reclass_item' => $row[23],
                'item_number3' => $row[34],
                'category_region' => $row[35],
                'school' => $row[36],
                'district' => $row[37],
                'old_item' => $row[38],
                'ct_item' => $row[39],
                'assignment' => $row[40],
                'department2' => null,
            ]);
        }
    }
}
