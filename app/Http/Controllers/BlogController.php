<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return view('backend.pages.blog.viewBlog');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.blog.createBlog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/images/', $filename);
            $blog->blog_image = 'upload/images/' . $filename;
        }

        $blog->save();

        return redirect('/admin/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = blog::findOrFail($id);
        return view('backend.pages.blog.editBlog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $blog = blog::findOrFail($id);
        $blog->blog_title = $request->blog_title;
        $blog->blog_description = $request->blog_description;

        if ($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('upload/images/', $filename);
            $blog->blog_image = 'upload/images/' . $filename;
        }

        $blog->update();

        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = blog::findOrFail($id);
        $blog->delete();
        return redirect()->back();
    }
}
