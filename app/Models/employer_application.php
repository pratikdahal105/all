<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employer_application extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
        'incharge',
        'url',
        'industry',
        'location',
        'phone',
        'email',
        'subject',
        'message',
        'status',
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
