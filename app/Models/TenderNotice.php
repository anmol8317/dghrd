<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderNotice extends Model
{
    use HasFactory;
    protected $table = 'tender_notices';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
