<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    use HasFactory;
    protected $table = 'covid19';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
