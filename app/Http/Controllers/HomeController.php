<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affiliate;
use App\Models\User;
use App\Models\Flyer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('home',compact('users'));
    }

    public function welcome()
    {
        $affiliates = Affiliate::latest()->get();
        return view('welcome', compact('affiliates'));
    }

    public function southEast()
    {
        return view('south-east');
    }


    public function southWest()
    {

        return view('south-west');
    }

    public function southSouth()
    {

        return view('south-south');
    }

    public function northCentral()
    {

        return view('north-central');
    }


    public function estates()
    {
        $estates = Affiliate::latest()->get();
        return view('estates', compact('estates'));
    }

    public function about()
    {
        return view('about');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function founders()
    {
        return view('founders');
    }
    public function president()
    {
        return view('president');
    }

    public function chairman()
    {
        return view('chairman');
    }

    public function services()
    {
        return view('services');
    }

    public function downloads()
    {
        $flyers = Flyer::where('status',1)->get();
        return view('downloads',compact('flyers'));
    }

    public function subscribe()
    {
        return view('subscribe');
    }

    public function pictures()
    {
        return view('pictures');
    }

    public function videos()
    {
        return view('videos');
    }
}
