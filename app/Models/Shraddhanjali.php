<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shraddhanjali extends Model
{
    use HasFactory;
    protected $table = 'shraddhanjalis';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
