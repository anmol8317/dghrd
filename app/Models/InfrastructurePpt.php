<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructurePpt extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_ppts';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
