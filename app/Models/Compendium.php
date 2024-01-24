<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compendium extends Model
{
    use HasFactory;
    protected $table = 'compendiums';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
