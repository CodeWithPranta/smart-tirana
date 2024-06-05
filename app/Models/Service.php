<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'listing_id',
        'service_title',
        'address',
        'more_specific_address',
        'phone_number',
        'website',
        'service_time_schedule',
        'editor_description',
        'self_information',
        'team_members',
        'media_coverage_images',
        'product_brochures',
        'service_offered',
        'google_map_embed_code',
        'photos',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'team_members' => 'array',
        'media_coverage_images' => 'array',
        'product_brochures' => 'array',
        'photos' => 'array',
    ];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
