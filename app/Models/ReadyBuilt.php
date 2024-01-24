<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadyBuilt extends Model
{
    use HasFactory;
    protected $table = 'ready_builts';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
