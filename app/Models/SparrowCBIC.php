<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparrowCBIC extends Model
{
    use HasFactory;
    protected $table = 'sparrow_cbic';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
