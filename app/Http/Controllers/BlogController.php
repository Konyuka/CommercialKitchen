<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categories;
use App\Models\ImportedBlog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;


class BlogController extends Controller
{
    public function uploadImageAPI($imageName)
    {
        $imagePath = public_path('covers/' . $imageName);
        $response = Http::attach('image', file_get_contents($imagePath), $imageName)
            ->post('https://api.imgbb.com/1/upload', [
                'key' => env('IMAGEBB_API'),
            ]);

        // $response = Http::post('https://api.imgbb.com/1/upload', [
        //     'image' => $image, 
        //     'key' => env('IMAGEBB_API'),
        // ]);

        // dd($response);

        $res = $response->json();
        return $res['data']['url'];
    }

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
            $imageURL = $this->uploadImageAPI($imageName);
        }

        $importedBlog = ImportedBlog::find($request->uploadID);

        if ($importedBlog !== null) {
            $importedBlog->published = true;
            $importedBlog->save();
        }


        Blog::create([
            'title' => $validated['title'],
            'category_id' => $request->category,
            'excerpt' => $validated['excerpt'],
            'cover' => $imageURL,
            'content' => $validated['content'],
        ]);

        return back()->with('message', 'Blog saved successfully');

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
            $imageURL = $this->uploadImageAPI($imageName);
            $blog->cover = $imageURL;
        }

        $blog->save();

        return back()->with('message', 'Blog updated successfully');

    }

    public function blogDetail($slug)
    {

        
        $string = $slug;
        $parts = explode("-", $string);
        $lastValue = end($parts);
        $blog = Blog::with('categories')->where('id', $lastValue)->firstOrFail();
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
        return back()->with('message', 'Imported Blog deleted successfully');
    }

}