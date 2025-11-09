<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DownloadResource extends Model
{
    use HasFactory;

    protected $table = 'resources';

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'file_name',
        'category',
        'downloads',
        'featured',
        'published',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'published' => 'boolean',
        'downloads' => 'integer',
    ];

    /**
     * Scope for published resources
     */
    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    /**
     * Scope for featured resources
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Scope by category
     */
    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Increment downloads
     */
    public function incrementDownloads()
    {
        $this->increment('downloads');
    }
}
