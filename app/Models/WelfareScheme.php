<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareScheme extends Model
{
    use HasFactory;
    protected $table = 'welfare_schemes';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
