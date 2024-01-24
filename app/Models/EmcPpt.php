<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmcPpt extends Model
{
    use HasFactory;
     protected $table = 'emc_ppts';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}