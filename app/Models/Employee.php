<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dob',
        'age',
        'sex',
        'nationality',
        'present_address',
        'academic_qualification',
        'japanese_language',
        'other_language',
        'industry',
        'work_experience',
        'skill_exam',
        'ms_office_skill',
        'graphics_design_other',
        'salary_per_year',
        'working_area',
        'apartment',
        'work_time',
        'possible_shift',
        'able_to_join',
        'status',
    ];

    public function employer_applications(){
        return $this->hasMany(employer_application::class);
    }
}
