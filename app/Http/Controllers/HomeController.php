<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Food;
use App\Models\Banner;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Specialdishes;
use App\Models\Dealer;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Variable containing navigation data.
     *
     */
    private $navdata;

    /**
     * Variable containing food data.
     */
    private $fooddata;

    /**
     * Variable containing special dishes data.
     */
    private $dishesdata;

    /**
     * Variable containing testimonial data.
     */
    private $testimonialdata;


    /**
     * Variable containing banner image URL.
     */
    private $banner_image;

    public function __construct()
    {
        $this->navdata = [
            ["text" => "home", "href" => url('/') . '#home'],
            ["text" => "about", "href" => route('about')],
            ["text" => "Our Product", "href" => route('shop')],
            ["text" => "Gallery", "href" => route('galleries')],
            ["text" => "book", "href" => url('/') . '#book'],
            ["text" => "Dealers", "href" =>  route('dealers')],
            ["text" => "contact", "href" => route('contact.us')],
        ];

        $this->fooddata = Food::paginate(12);
        $this->dishesdata = Specialdishes::all();
        $this->testimonialdata = Testimonial::all();
        $banner = Banner::latest()->first();

        $this->banner_image = $banner ? $banner->image_url : null;

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
        $fooddata = Food::latest()->paginate(12);
        $dishesdata = Specialdishes::all();
        $testimonialdata = Testimonial::all();
        $banner = Banner::latest()->first();

        $banner_images = Banner::where('page', 'HOME')->get();


        return view("home.index", compact('navdata', 'fooddata', 'dishesdata', 'testimonialdata', 'banner_images', 'banner'));
    }

    public function productDetail($slug)
    {
        $product = Food::where('slug', $slug)->first();
        $navdata = $this->navdata;

        return view('home.details', compact('product', 'navdata'));
    }

    public function contactUs()
    {
        $navdata = $this->navdata;
        $banner_image = $this->getBanner('CONTACT');


        return view('home.contact-us', compact('navdata', 'banner_image'));
    }


    public function aboutUs()
    {
        return view('home.about-us', [
            'navdata' => $this->navdata,
            'fooddata' => $this->fooddata,
            'dishesdata' => $this->dishesdata,
            'testimonialdata' => Team::get(),
            'banner_image' => $this->getBanner('ABOUT'),
        ]);
    }

    public function shop()
    {
        return view('home.shop', [
            'navdata' => $this->navdata,
            'fooddata' => $this->fooddata,
            'dishesdata' => $this->dishesdata,
            'testimonialdata' => $this->testimonialdata,
            'banner_image' => $this->getBanner('SHOP'),
        ]);
    }

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('home.blogs', [
            'navdata' => $this->navdata,
            'blogs' => $blogs,
            'fooddata' => $this->fooddata,
            'dishesdata' => $this->dishesdata,
            'testimonialdata' => $this->testimonialdata,
            'banner_image' => $this->getBanner('BLOG'),
        ]);
    }

    public function blogDetail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('home.blog-detail', [
            'navdata' => $this->navdata,
            'blog' => $blog,
            'fooddata' => $this->fooddata,
            'dishesdata' => $this->dishesdata,
            'testimonialdata' => $this->testimonialdata,
            'banner_image' => $this->getBanner('BLOG'),
        ]);
    }

    public function dealers()
    {

        $dealers = Dealer::all();

        return view('home.dealers', [
            'navdata' => $this->navdata,
            'dealers' => $dealers,
            'fooddata' => $this->fooddata,
            'dishesdata' => $this->dishesdata,
            'testimonialdata' => $this->testimonialdata,
            'banner_image' => $this->getBanner('DEALERS'),
        ]);
    }


    private function getBanner($page)
    {
        return Banner::where('page', $page)->first();
    }
}
