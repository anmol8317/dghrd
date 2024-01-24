<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelDraft extends Model
{
    use HasFactory;
    protected $table = 'hotel_drafts';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
