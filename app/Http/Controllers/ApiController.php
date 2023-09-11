<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Blog;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getCategories()
    {
        return Categories::orderBy('name')->get();
    }

    public function getBlog()
    {
        return Blog::with('categories')->get();
    }

    public function getPublishedBlog()
    {
        return Blog::where('published', true)->with('categories')->get();
    }

    
}
