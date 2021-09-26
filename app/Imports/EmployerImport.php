<?php

namespace App\Imports;

use App\Models\Employer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employer([
            'job_title' => $row['job_title'],
            'job_description' => $row['job_description'],
            'working_hours' => $row['working_hours'],
            'working_days' => $row['working_days'],
            'break_time' => $row['break_time'],
            'overtime_average_monthly' => $row['overtime_average_monthly'],
            'company_name' => $row['company_name'],
            'industry' => $row['industry'],
            'business_content' => $row['business_content'],
            'company_address' => $row['company_address'],
            'total_workers' => $row['total_workers'],
            'contact' => $row['contact'],
            'fax' => $row['fax'],
            'salary' => $row['salary'],
            'bonous' => $row['bonous'],
            'salary_increase' => $row['salary_increase'],
            'salary_day' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['salary_day'])->format('Y-m-d'),
            'company_room' => $row['company_room'],
            'travel_expenses' => $row['travel_expenses'],
            'health_insurance' => $row['health_insurance'],
            'pension' => $row['pension'],
            'work_insurance' => $row['work_insurance'],
            'income_tax' => $row['income_tax'],
            'city_tax' => $row['city_tax'],
            'room_rent' => $row['room_rent'],
            'internet' => $row['internet'],
            'uniform' => $row['uniform'],
            'transportation' => $row['transportation'],
            'others' => $row['others'],
        ]);
    }
}
