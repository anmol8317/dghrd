<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniorityList extends Model
{
    use HasFactory;
    protected $table = 'seniority_list';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
