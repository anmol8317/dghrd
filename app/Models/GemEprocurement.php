<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GemEprocurement extends Model
{
    use HasFactory;
    protected $table = 'gem_eprocurements';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
