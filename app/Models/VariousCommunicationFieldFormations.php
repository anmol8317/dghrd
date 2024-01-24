<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariousCommunicationFieldFormations extends Model
{
    use HasFactory;
    protected $table = 'various_communication';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
