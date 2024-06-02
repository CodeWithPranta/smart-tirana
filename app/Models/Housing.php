<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Housing extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'property_type',
        'owner_status',
        'compound_or_building_name',
        'basic_information',
        'floor',
        'size',
        'main_windows_face_direction',
        'bedrooms',
        'bathrooms',
        'photos',
        'features',
        'price',
        'period',
        'available_from',
        'location_on_google_map',
        'ads_title',
    ];

    protected $casts = [
        'photos' => 'array',
        'features' => 'array',
    ];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
