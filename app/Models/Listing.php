<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category_id', 'user_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function sell(): HasOne
    {
        return $this->hasOne(Sell::class);
    }

    public function jobPost(): HasOne
    {
        return $this->hasOne(JobPost::class);
    }

    public function venue(): HasOne
    {
        return $this->hasOne(Venue::class);
    }

    public function event(): HasOne
    {
        return $this->hasOne(Event::class);
    }

    public function housing(): HasOne
    {
        return $this->hasOne(Housing::class);
    }

    public function service(): HasOne
    {
        return $this->hasOne(Service::class);
    }

}
