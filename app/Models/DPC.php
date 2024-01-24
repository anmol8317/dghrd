<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPC extends Model
{
    use HasFactory;
    protected $table = 'dpc';
    protected $fillable = [
        'tab',
        'tittle',
        'date',
        'pdf',
    ];
}
