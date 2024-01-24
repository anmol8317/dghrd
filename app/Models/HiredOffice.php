<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HiredOffice extends Model
{
    use HasFactory;
    protected $table = 'hired_offices';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
