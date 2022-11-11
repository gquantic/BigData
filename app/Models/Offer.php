<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $casts = [
        'geo' => 'array',
        'costs' => 'array',
        'blocked_socials' => 'array',
    ];
}
