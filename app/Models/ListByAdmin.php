<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
