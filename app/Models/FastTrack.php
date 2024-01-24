<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastTrack extends Model
{
    use HasFactory;
    protected $table = 'fast_tracks';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
