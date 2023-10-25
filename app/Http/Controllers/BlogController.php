<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\ImportedBlog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function addCategory(Request $request) 
    {
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

    public function uploadImage(Request $request)
    {

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
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'content' => 'required',
        ]);

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->cover->move(public_path('covers'), $imageName);
        }

        $importedBlog = ImportedBlog::find($request->uploadID);

        if($importedBlog!==null){
            $importedBlog->published = true;
            $importedBlog->save();
        }

        
        Blog::create([
            'title' => $validated['title'],
            'category_id' => $request->category,
            'excerpt' => $validated['excerpt'],
            'cover' => '/covers\/' . $imageName,
            'content' => $validated['content'],
        ]);

        return Inertia::location(route('admin.blogs'));

    }

    public function updateBlog(Request $request, $slug)
    {
        $validated = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::find($slug);
        $blog->title = $validated['title'];
        $blog->category_id = $request->category;
        $blog->excerpt = $validated['excerpt'];
        $blog->content = $validated['content'];

        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->cover->move(public_path('covers'), $imageName);
            $blog->cover = '/covers\/' . $imageName;
        }

        $blog->save();

        return back()->with('message', 'Blog updated successfully');

    }

    public function blogDetail(Request $request)
    {
        $blogId = $request->blogId;
        $blog = Blog::with('categories')->where('id', $blogId)->firstOrFail();
        return Inertia::render('Client/Detail', compact('blog'));

    }

    public function publishBlog($slug)
    {
        $blog = Blog::where('id', $slug)->first();

        if ($blog->published) {
            $blog->published = false;
        } else {
            $blog->published = true;
        }

        $blog->save();

        return back()->with('message', 'Blog published successfully');

    }

    public function featureBlog($slug)
    {
        $blog = Blog::where('id', $slug)->first();

        if ($blog->featured) {
            $blog->featured = false;
        } else {
            $blog->featured = true;
        }

        $blog->save();

        return back()->with('message', 'Blog published successfully');

    }

    public function deleteBlog($slug)
    {
        $blog = Blog::find($slug);
        $blog->delete();
        return back()->with('message', 'Blog deleted successfully');
    }

    public function deleteImportedBlog($slug)
    {
        $blog = ImportedBlog::find($slug);
        $blog->delete();
        return Inertia::location(route('admin.blogs'));
    }

}