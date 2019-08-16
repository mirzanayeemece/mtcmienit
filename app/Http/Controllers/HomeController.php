<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        return view('admin.home.homeContent');
    }
    public function venue(){
        return view('admin.training.venue');
    }
    public function venueRes(){
        return view('admin.training.venueRes');
    }
    public function venueAlloc(){
        return view('admin.training.venueAlloc');
    }
}
