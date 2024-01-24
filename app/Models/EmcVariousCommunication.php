<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmcVariousCommunication extends Model
{
    use HasFactory;
    protected $table = 'emc_various_communications';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
