<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CateringEnquiry extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'user_email',
        'phone',
        'event_type',
        'event_date',
        'event_location',
        'guest_count',
        'meal_types',
        'selected_dishes',
        'special_instructions',
        'estimated_price',
        'status',
    ];

    protected $casts = [
        'meal_types' => 'array',
        'selected_dishes' => 'array',
        'event_date' => 'date',
        'estimated_price' => 'decimal:2',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
