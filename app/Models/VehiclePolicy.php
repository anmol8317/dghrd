<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiclePolicy extends Model
{
    use HasFactory;
    protected $table = 'vehicle_policies';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
