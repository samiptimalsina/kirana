<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //

    public function index()
    {
        $galleries = Gallery::paginate(10);

        return view('admin.gallery.index', compact('galleries'));
    }
    public function create() {
        return view('admin.gallery.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'gallery_name' => 'required|string|max:255',
            'file.*' => 'mimes:jpeg,jpg,png,gif|max:2048', // Validate file types and size
        ]);

        $imagePaths = [];

        $gallery = Gallery::create([
            'gallery_name' => $request->input('gallery_name'),
        ]);

        if ($request->hasFile('file')) {

            foreach ($request->file('file') as $file) {
                $image_name = Str::random(5) . '_' . time() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('assets/images/gallery'), $image_name);

                $imagePaths[] = 'assets/images/gallery/' . $image_name;
            }

            $gallery->update([
                'images' => $imagePaths,
            ]);
        }

        return redirect()->back()->with('success', 'Gallery created successfully!');
    }


    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }


    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'gallery_name' => 'required|string|max:255',
            'file.*' => 'mimes:jpeg,jpg,png,gif|max:2048', // Validate file types and size
        ]);

        $gallery = Gallery::findOrFail($id);

        $imagePaths = $gallery->images ?? [];

        $gallery->update([
            'gallery_name' => $request->input('gallery_name'),
        ]);

        // Check if files were uploaded
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $image_name = Str::random(5) . '_' . time() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('assets/images/gallery'), $image_name);

                $imagePaths[] = 'assets/images/gallery/' . $image_name;
            }

            $gallery->update([
                'images' => $imagePaths,
            ]);
        }

        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully!');
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->images) {
            foreach ($gallery->images as $image) {
                if (file_exists(public_path($image))) {
                    unlink(public_path($image));
                }
            }
        }

        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully!');
    }
}
