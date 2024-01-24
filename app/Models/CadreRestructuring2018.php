<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadreRestructuring2018 extends Model
{
    use HasFactory;
    protected $table = 'cadre_restructuring2018';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
