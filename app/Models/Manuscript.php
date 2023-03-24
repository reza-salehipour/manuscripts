<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'sit_in_system',
        'title',
        'status',
    ];

}
