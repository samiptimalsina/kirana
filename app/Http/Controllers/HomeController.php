<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Specialdishes;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Variable containing navigation data.
     *
     */
    private $navdata = [
        ["text" => "home", "href" => "#home"],
        ["text" => "about", "href" => "#about"],
        ["text" => "menu", "href" => "#menu"],
        ["text" => "testimonial", "href" => "#testimonial"],
        ["text" => "book", "href" => "#book"],
        ["text" => "contact", "href" => "#contact"],
    ];

    /**
     * Display a home page of foodfun with all info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navdata = $this->navdata;
        $fooddata = food::all();
        $dishesdata = specialdishes::all();
        $testimonialdata = testimonial::all();
        $banner = Banner::latest()->first();

         $banner_image=$banner->image_url;

        return view("home.index", compact('navdata', 'fooddata', 'dishesdata', 'testimonialdata','banner_image','banner'));
    }

    public function productDetail($slug){
        $product=Food::where('slug',$slug)->first();
        $navdata = $this->navdata;

        return view('home.details',compact('product','navdata'));

    }
}
