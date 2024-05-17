<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Specialdishes;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Variable containing navigation data.
     *
     */
    private $navdata;

    public function __construct()
    {
        $this->navdata = [
            ["text" => "home", "href" => url('/') . '#home'],
            ["text" => "about", "href" => url('/') . '#about'],
            ["text" => "menu", "href" => url('/') . '#menu'],
            ["text" => "testimonial", "href" => url('/') . '#testimonial'],
            ["text" => "book", "href" => url('/') . '#book'],
            ["text" => "contact", "href" => url('/') . '#contact'],
        ];

        $settings = Setting::first();
        view()->share('settings', $settings);
    }

    /**
     * Display the home page of Foodfun with all info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navdata = $this->navdata;
        $fooddata = Food::all();
        $dishesdata = Specialdishes::all();
        $testimonialdata = Testimonial::all();
        $banner = Banner::latest()->first();

        $banner_image = $banner->image_url;

        return view("home.index", compact('navdata', 'fooddata', 'dishesdata', 'testimonialdata', 'banner_image', 'banner'));
    }

    public function productDetail($slug)
    {
        $product = Food::where('slug', $slug)->first();
        $navdata = $this->navdata;

        return view('home.details', compact('product', 'navdata'));
    }
}
