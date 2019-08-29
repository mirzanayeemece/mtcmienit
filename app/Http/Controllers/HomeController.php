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
    //VENUE
    public function addvenue(){
        return view('admin.training.addvenue');
    }
    //ADD VENUE IN DATABASE
    public function savevenue(Request $request)
    {
        $this->validate($request, [
          'name'  => 'required|max:120',
          'location'  => 'required|max:120',
          'price'  => 'required|max:30',
          'feature'  => 'required|max:255'
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['location'] = $request->location;
        $data['price'] = $request->price;
        $data['feature'] = $request->feature;

        DB::table('venues')->insert($data);
        Session::put('message','Venue is Added Successfully');
        return Redirect::to('/training/addvenue');
    }
    //DELETE VENUE IN DATABASE
    public function delete_venue($id)
    {
        DB::table('venues')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Venue is deleted Successfully');
        return Redirect::to('/training/venue');
    }
    //EDIT VENUE IN DATABASE
    public function edit_venue($id)
    {
        $venueinfo=DB::table('venues')
                           ->where('id',$id)
                           ->first();
        
        $manage_venue=view('admin.training.editvenue')
                         ->with('allvenueinfo',$venueinfo);
        return view('admin.master')
                         ->with('admin.training.editvenue',$manage_venue);
    }
    //UPDATE VENUE IN DATABASE
    public function update_venue(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['location'] = $request->location;
        $data['price'] = $request->price;
        $data['feature'] = $request->feature;

        DB::table('venues')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Venue is updated Successfully');
        return Redirect::to('/training/venue');
    }
    public function venueRes(){
        return view('admin.training.venueRes');
    }
    public function venueAlloc(){
        return view('admin.training.venueAlloc');
    }
}
