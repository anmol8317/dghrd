<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfarePpt extends Model
{
    use HasFactory;

    protected $table = 'welfare_ppts';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
