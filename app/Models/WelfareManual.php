<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareManual extends Model
{
    use HasFactory;
    protected $table = 'welfare_manuals';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
