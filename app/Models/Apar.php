<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apar extends Model
{
    use HasFactory;
    protected $table = 'apar';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
