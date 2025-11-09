<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'type',
        'event_date',
        'location',
        'platform',
        'registration_link',
        'image',
        'is_published',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'event_date' => 'datetime',
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'order' => 'integer',
    ];

    /**
     * Scope for published events
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope for upcoming events
     */
    public function scopeUpcoming($query)
    {
        return $query->where('event_date', '>=', now());
    }

    /**
     * Scope for past events
     */
    public function scopePast($query)
    {
        return $query->where('event_date', '<', now());
    }

    /**
     * Scope for featured events
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope ordered by event date
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('event_date');
    }

    /**
     * Scope for webinars
     */
    public function scopeWebinars($query)
    {
        return $query->where('type', 'webinar');
    }

    /**
     * Scope for in-person events
     */
    public function scopeInPerson($query)
    {
        return $query->whereIn('type', ['event', 'workshop', 'summit']);
    }
}
