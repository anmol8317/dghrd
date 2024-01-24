<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfrastructureOfficerDetail extends Model
{
    use HasFactory;
    protected $table = 'infrastructure_officer_details';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
