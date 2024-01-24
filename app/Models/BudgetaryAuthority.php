<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetaryAuthority extends Model
{
    use HasFactory;
    protected $table = 'budgetary_authorities';

    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
