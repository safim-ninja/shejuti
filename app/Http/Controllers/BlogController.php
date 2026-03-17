<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs', compact('blogs'));
    }
    public function create()
    {
        return view('admin.create-blog');
    }
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $blog->image = $path;
        }
        $blog->save();
        return redirect()->route('admin.blogs')->with('status', 'blog-created');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit-blog', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('blogs', 'public');
            $blog->image = $path;
        }
        $blog->save();
        return redirect()->route('admin.blogs')->with('status', 'blog-updated');
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('admin.blogs')->with('status', 'blog-deleted');
    }

}
