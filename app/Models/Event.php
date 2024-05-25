<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_title',
        'event_status',
        'on_date',
        'ends_on_date',
        'weekdays',
        'starts_at_time',
        'event_description',
        'price',
        'event_type',
        'venue_id',
        'contact_of_organizer',
        'flyer_image',
        'menu_image',
        'listing_id',
    ];

    protected $casts = [
        'weekdays' => 'array',
    ];

    public function venue(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
