<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
  public function index()
    {

        $banners = Banner::all();
        return view('admin.banners.index', compact( 'banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_url' => 'required',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        if($request->has('image_url')){
            $image = $request->file('image_url');
            $image_name = Str::random(5) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/banner'), $image_name);
        }

            Banner::create([
            'image_url' => $image_name,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully.');
    }

    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.show', compact('banner'));
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image_url' => 'required',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $banner = Banner::findOrFail($id);
        $banner->update($request->all());

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }

        private function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : true;
    }
}
