<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class E_Dispostion extends Model
{
    use HasFactory;
    protected $table = 'e_dispostion';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
