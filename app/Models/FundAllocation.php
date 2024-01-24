<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundAllocation extends Model
{
    use HasFactory;
      protected $table = 'fund_allocations';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
