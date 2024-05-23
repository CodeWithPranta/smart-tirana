<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'city_id',
        'job_type',
        'location_type',
        'seniority',
        'min_salary',
        'max_salary',
        'candidate_location',
        'job_title',
        'company_name',
        'office_address',
        'company_introduction',
        'company_website',
        'listing_logo_image',
        'general_job_description',
        'position_requirements',
        'benefits',
        'additional_application_instructions',
        'your_name',
        'your_phone',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function listing(): BelongsTo
    {
        return $this->belongsTo(Listing::class);
    }
}
