<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delegate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'organization',
        'role',
        'country',
        'bio',
        'photo',
        'linkedin_url',
        'twitter_url',
        'website_url',
        'delegate_type',
        'is_published',
        'order',
        'registered_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'order' => 'integer',
        'registered_at' => 'datetime',
    ];

    /**
     * Scope for published delegates
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope ordered by order field
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }

    /**
     * Scope for specific delegate types
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('delegate_type', $type);
    }

    /**
     * Scope for speakers
     */
    public function scopeSpeakers($query)
    {
        return $query->where('delegate_type', 'speaker');
    }

    /**
     * Scope for sponsors
     */
    public function scopeSponsors($query)
    {
        return $query->where('delegate_type', 'sponsor');
    }

    /**
     * Scope for partners
     */
    public function scopePartners($query)
    {
        return $query->where('delegate_type', 'partner');
    }

    /**
     * Scope for attendees
     */
    public function scopeAttendees($query)
    {
        return $query->where('delegate_type', 'attendee');
    }

    /**
     * Get delegate type label
     */
    public function getTypeLabelAttribute(): string
    {
        return match($this->delegate_type) {
            'speaker' => 'Speaker',
            'sponsor' => 'Sponsor',
            'partner' => 'Partner',
            'attendee' => 'Attendee',
            default => 'Attendee',
        };
    }

    /**
     * Get initials from name
     */
    public function getInitialsAttribute(): string
    {
        return collect(explode(' ', $this->name))
            ->map(fn($word) => strtoupper($word[0] ?? ''))
            ->join('')
            ->substring(0, 2);
    }
}
