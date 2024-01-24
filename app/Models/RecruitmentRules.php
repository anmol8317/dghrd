<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentRules extends Model
{
    use HasFactory;
    protected $table = 'recruitment_rules';
    protected $fillable = [
        'tab',
        'sub_tab',
        'tittle',
        'date',
        'pdf',
    ];
}
