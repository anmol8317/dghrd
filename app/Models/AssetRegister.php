<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetRegister extends Model
{
    use HasFactory;
    protected $table = 'asset_registers';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
