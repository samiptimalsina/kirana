<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blog'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'short_desc' => $request->short_desc,
            'image' => $imageName,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blog'), $imageName);
            $blog->image = $imageName;
        }

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->content;
        $blog->short_desc = $request->short_desc;
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->image) {
            unlink(public_path('assets/images/blog') . '/' . $blog->image);
        }
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
