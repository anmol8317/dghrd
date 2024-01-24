<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IrsOfficer extends Model
{
    use HasFactory;
    protected $table = 'irs_officers';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
