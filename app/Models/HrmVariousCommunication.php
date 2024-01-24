<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HrmVariousCommunication extends Model
{
    use HasFactory;
    protected $table = 'hrm_various_communications';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
