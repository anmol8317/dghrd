<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommanFacility extends Model
{
    use HasFactory;
    protected $table = 'comman_facilities';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
