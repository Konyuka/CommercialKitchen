<?php

namespace App\Http\Controllers;

use App\Models\ImportedBlog;
use Illuminate\Http\Request;

class ImportedBlogController extends Controller
{
    public function store(Request $request)
    {
        $blogs = $request->data;
        foreach ($blogs as $blog) {
            $existingBlog = ImportedBlog::where('content', $blog['content'])->first(); 

            if (!$existingBlog) {
                ImportedBlog::create([
                    'title' => $blog['title'],
                    'excerpt' => $blog['excerpt'],
                    'content' => $blog['content'],
                    'link' => $blog['link'],
                    'website' => $request->websiteName,
                ]);
            }
        }

        return back()->with('message', 'Blogs have been imported successfully');
    }
}