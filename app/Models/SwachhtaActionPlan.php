<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwachhtaActionPlan extends Model
{
    use HasFactory;
    protected $table = 'swachhta_action_plans';
    protected $fillable = [
        'tab',
        'tittle',
        'date',
        'pdf',
    ];
}
