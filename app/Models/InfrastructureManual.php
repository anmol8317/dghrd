<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructureManual extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_manuals';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
