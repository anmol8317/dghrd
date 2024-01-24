<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionPlan extends Model
{
    use HasFactory;
    protected $table = 'action_plans';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];

}
