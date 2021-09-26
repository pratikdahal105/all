<?php

namespace App\Imports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name' => $row['name'],
            'dob' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob'])->format('Y-m-d'),
            'age' => $row['age'],
            'sex' => $row['sex'],
            'nationality' => $row['nationality'],
            'present_address' => $row['present_address'],
            'academic_qualification' => $row['academic_qualification'],
            'japanese_language' => $row['japanese_language'],
            'other_language' => $row['other_language'],
            'industry' => $row['industry'],
            'work_experience' => $row['work_experience'],
            'skill_exam' => $row['skill_exam'],
            'ms_office_skill' => $row['ms_office_skill'],
            'graphics_design_other' => $row['graphics_design_other'],
            'salary_per_year' => $row['salary_per_year'],
            'working_area' => $row['working_area'],
            'apartment' => $row['apartment'],
            'work_time' => $row['work_time'],
            'possible_shift' => $row['possible_shift'],
            'able_to_join' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['able_to_join'])->format('Y-m-d'),
        ]);
    }
}
