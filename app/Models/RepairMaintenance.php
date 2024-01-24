<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairMaintenance extends Model
{
    use HasFactory;
    protected $table = 'repair_maintenances';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
