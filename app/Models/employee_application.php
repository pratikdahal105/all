<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee_application extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'name',
        'email',
        'phone',
        'present_address',
        'nationality',
        'subject',
        'message',
        'status',
    ];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }
}
