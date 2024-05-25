<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'venue_name',
        'attachments',
        'address',
        'nearest_cross_street',
        'nearby_metro',
        'phone_number',
        'channel_id',
        'website',
        'opening_hours',
        'wifi_name',
        'wifi_password',
        'venue_description',
        'open_since',
    ];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
