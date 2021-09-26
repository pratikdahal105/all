<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'job_description',
        'working_hours',
        'working_days',
        'break_time',
        'overtime_average_monthly',
        'company_name',
        'industry',
        'business_content',
        'company_address',
        'total_workers',
        'contact',
        'fax',
        'salary',
        'bonous',
        'salary_increase',
        'salary_day',
        'company_room',
        'travel_expenses',
        'health_insurance',
        'pension',
        'work_insurance',
        'income_tax',
        'city_tax',
        'room_rent',
        'internet',
        'uniform',
        'transportation',
        'others',
        'status',
    ];

    public function employee_applications(){
        return $this->hasMany(employee_application::class);
    }
}
