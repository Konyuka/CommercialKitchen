<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Blog;
use App\Models\Lead;
use App\Models\ImportedBlog;

use Illuminate\Http\Request;

class ApiController extends Controller 
{
    public function getCategories()
    {
        return Categories::orderBy('name')->get();
    }

    public function getBlog() 
    {
        return Blog::with('categories')->latest()->get();
    }

    public function getPublishedBlog()
    {
        return Blog::where('published', true)->with('categories')->latest()->get(); 
    }

    public function getLeads()
    {
        return Lead::orderBy('created_time')->get(); 
    }

    public function updateProbability(Request $request, $id)
    {
        $lead = Lead::where('id', $id)->first();
        $lead->probability = $request->value;
        $lead->save();
        return back();
    }

    public function updateLocation(Request $request, $id)
    {
        $lead = Lead::where('id', $id)->first();
        $lead->location = $request->value;
        $lead->save();
        return back();
    }

    public function updateWhen(Request $request, $id)
    {
        $lead = Lead::where('id', $id)->first();
        $lead->how_soon = $request->value;
        $lead->save();
        return back();
    }

    public function getImportedBlogs ()
    {
        return ImportedBlog::latest()->get();
    } 
    
}
