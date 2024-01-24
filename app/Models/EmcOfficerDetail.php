<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmcOfficerDetail extends Model
{
    use HasFactory;
    protected $table = 'emc_officer_details';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}