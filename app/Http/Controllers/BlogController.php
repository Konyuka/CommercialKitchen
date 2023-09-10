<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function addCategory(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:categories'
        ], [
            'name.unique' => 'The category has already been added'
        ]);

        Categories::create([
            'name' => $validated['name']
        ]);

        return back()->with('message', 'Category created successfully');
    }

    public function uploadImage(Request $request){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog_image'), $imageName);
        }
        return response()->json(['url' => '/blog_image\/' . $imageName]);
    }
   
    public function storeBlog(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->cover->move(public_path('covers'), $imageName);
        }

        Blog::create([
            'title' => $validated['title'],
            'category_id' => $request->category,
            'excerpt' => $validated['excerpt'],
            'cover' => '/covers\/' . $imageName,
            'content' => $validated['content'],
        ]);

        return back()->with('message', 'Blog saved successfully');
        
    }

}
