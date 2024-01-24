<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareOfficer extends Model
{
    use HasFactory;
    protected $table = 'welfare_officers';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
