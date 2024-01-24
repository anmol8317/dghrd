<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HalfYearlyBrochure extends Model
{
    use HasFactory;

    protected $table = 'half_yearly_brochures';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
