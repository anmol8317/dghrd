<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EVacencyModuleUpdate extends Model
{
    use HasFactory;
    protected $table = 'e_vacency_module_updates';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
