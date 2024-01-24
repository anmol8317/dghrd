<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpanelmentDeputation extends Model
{
    use HasFactory;
    protected $table = 'empanelment_deputation';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
