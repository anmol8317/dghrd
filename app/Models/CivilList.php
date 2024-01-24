<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CivilList extends Model
{
    use HasFactory;

    protected $table = 'civil_lists';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
