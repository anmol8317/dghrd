<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCode extends Model
{
    use HasFactory;
    protected $table = 'employee_codes';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
