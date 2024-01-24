<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPR extends Model
{
    use HasFactory;
    protected $table = 'ipr';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
