<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmcManual extends Model
{
    use HasFactory;
     protected $table = 'emc_manuals';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}