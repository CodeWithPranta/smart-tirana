<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'name', 'slug', 'parent_id', 'is_visible', 'details'];

    public function subcategories()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    public function parentCategory()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id');
    }
}
