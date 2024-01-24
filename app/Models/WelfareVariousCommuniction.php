<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareVariousCommuniction extends Model
{
    use HasFactory;
    protected $table = 'welfare_various_communications';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
