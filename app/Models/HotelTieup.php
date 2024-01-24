<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelTieup extends Model
{
    use HasFactory;
    protected $table = 'hotel_tieups';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
