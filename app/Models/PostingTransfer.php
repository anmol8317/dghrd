<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostingTransfer extends Model
{
    use HasFactory;
    protected $table = 'posting_tansfer';
    protected $fillable = [
        'tittle',
        'date',
        'pdf',
    ];
}
