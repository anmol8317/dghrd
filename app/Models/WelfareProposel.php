<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelfareProposel extends Model
{
    use HasFactory;
    protected $table = 'welfare_proposels';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
