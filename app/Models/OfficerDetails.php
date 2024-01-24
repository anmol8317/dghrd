<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficerDetails extends Model
{
    use HasFactory;
    protected $table = 'officer_details';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
