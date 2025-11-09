<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of published blogs
     */
    public function index()
    {
        $blogs = Blog::published()
            ->orderBy('published_at', 'desc')
            ->paginate(12);

        return Inertia::render('Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Display the specified blog post
     */
    public function show(Blog $blog)
    {
        // Check if blog is published
        if (!$blog->isPublished()) {
            abort(404);
        }

        // Increment views
        $blog->incrementViews();

        // Get related posts (same tags)
        $relatedPosts = Blog::published()
            ->where('id', '!=', $blog->id)
            ->take(3)
            ->get();

        return Inertia::render('Blog/Show', [
            'blog' => $blog,
            'relatedPosts' => $relatedPosts,
        ]);
    }
}
