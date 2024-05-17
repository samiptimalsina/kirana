<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Setting;
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
            'image_url' => 'nullable|image',
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image_url')) {
            if (file_exists(public_path('assets/images/banner/' . $banner->image_url))) {
                unlink(public_path('assets/images/banner/' . $banner->image_url));
            }

            $image = $request->file('image_url');
            $image_name = Str::random(5) . '_' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/banner'), $image_name);
            $banner->image_url = $image_name;
        }

        $banner->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        if (file_exists(public_path('assets/images/banner/' . $banner->image_url))) {
            unlink(public_path('assets/images/banner/' . $banner->image_url));
        }

        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }

        private function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : true;
    }



    public function updateOrCreateSettings(Request $request)
    {
        $settings = Setting::find(1);
 if ($request->isMethod('post') || $request->isMethod('put')) {
        $validatedData = $request->validate([
            'logo' => 'nullable|image',
            'site_name' => 'required|string',
            'about_us' => 'required|string',
            'about_us_image' => 'nullable|image',
            'contact_address' => 'required|string',
            'contact_phone' => 'required|string',
            'contact_email' => 'required|string|email',
            'opening_hours' => 'required|string',
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logo_name = Str::random(5) . '_' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('assets/images/settings'), $logo_name);
            $validatedData['logo'] = $logo_name;
        }

        if ($request->hasFile('about_us_image')) {
            $about_us_image = $request->file('about_us_image');
            $about_us_image_name = Str::random(5) . '_' . time() . '.' . $about_us_image->getClientOriginalExtension();
            $about_us_image->move(public_path('assets/images/settings'), $about_us_image_name);
            $validatedData['about_us_image'] = $about_us_image_name;
        }

        if ($settings) {
            $settings->update($validatedData);
        } else {
            $settings = Setting::create($validatedData);
        }



        return redirect()->route('settings')->with('success', 'Settings updated successfully.');
          }

              return view('admin.setting.update', compact('settings'));

    }


}
