<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariousCommunication extends Model
{
    use HasFactory;
    protected $table = 'various_communications';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
