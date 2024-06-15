<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ListByAdmin extends Model
{
    use HasFactory;

    protected $fillable = ['listing_id', 'main_title',
                'list_details', 'photos', 'key_values', 'google_map_code', 'description' ];

    protected $casts = [
        'list_details' => 'array',
        'photos' => 'array',
        'key_values' => 'array',
    ];

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
