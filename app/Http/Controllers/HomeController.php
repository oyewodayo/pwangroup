<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affiliate;
use App\Models\User;

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


    public function affiliates()
    {
        $affiliates = Affiliate::latest()->get();
        return view('affiliates', compact('affiliates'));
    }

    public function about()
    {
        return view('about');
    }
}
