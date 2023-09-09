<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use Illuminate\Http\Request;

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
            $image->storeAs('public/images', $imageName); 
        }

        $imageUrl = asset('storage/images/' . $imageName); 
        // return response()->json(['url' => $imageUrl]);
        return response()->json(['url' => 'https://commercialkitchen.co.ke/img/concept.jpg']);

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
            $image->storeAs('public/covers', $imageName);
        }

        $imageUrl = asset('storage/covers/' . $imageName);

        // dd($imageUrl);
        Blog::create([
            'title' => $validated['title'],
            'catgeory_id' => $request->category,
            'excerpt' => $validated['excerpt'],
            'cover' => $imageUrl,
            'content' => $validated['content'],
        ]);
        
    }

}
