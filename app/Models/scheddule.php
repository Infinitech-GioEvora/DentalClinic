<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scheddule extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'date',
        'time',
    ];
}
