<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanctionedWorking extends Model
{
    use HasFactory;
    protected $table = 'sanctioned_working';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
