<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Auth;
use Session;
Session_start();

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
        $allvenueinfo=DB::table('venues')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_venue=view('admin.training.venue')
                         ->with('allvenueinfo',$allvenueinfo);
        return view('admin.master')
                         ->with('admin.training.venue',$manage_venue);
    }
    public function addvenue(){
        return view('admin.training.addvenue');
    }
    public function venueRes(){
        return view('admin.training.venueRes');
    }
    public function venueAlloc(){
        return view('admin.training.venueAlloc');
    }
}
