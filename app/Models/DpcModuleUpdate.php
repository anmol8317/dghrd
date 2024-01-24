<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DpcModuleUpdate extends Model
{
    use HasFactory;
    protected $table = 'dpc_module_updates';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
