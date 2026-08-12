<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'traditional_name',
        'category',
        'description',
        'ingredients',
        'image',
        'is_popular',
        'sattvic_grade',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'is_popular' => 'boolean',
    ];
}
