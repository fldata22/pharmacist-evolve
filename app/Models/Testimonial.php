<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'photo',
        'feedback',
        'rating',
        'program',
        'featured',
        'published',
        'order',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'rating' => 'integer',
        'order' => 'integer',
    ];

    /**
     * Scope for published testimonials
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    /**
     * Scope for featured testimonials
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope ordered
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
