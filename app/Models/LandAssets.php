<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandAssets extends Model
{
    use HasFactory;
    protected $table = 'land_assets';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
