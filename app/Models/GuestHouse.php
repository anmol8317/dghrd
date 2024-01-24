<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestHouse extends Model
{
    use HasFactory;
    protected $table = 'guest_houses';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
