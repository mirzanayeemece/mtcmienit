<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
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

    // --- METHODS FOR VENUE --- //
    //VENUE
    public function venue(){
        $allvenueinfo=DB::table('venues')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_venue=view('admin.training.venue')
                         ->with('allvenueinfo',$allvenueinfo);
        return view('admin.master')
                         ->with('admin.training.venue',$manage_venue);
    }
    //ADD VENUE
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
    //VENUE RESERVATION
    public function venueRes(){
        $allvenueresinfo=DB::table('venuereservations')
                         ->join('venues', 'venuereservations.venue_id', '=', 'venues.id')
                         ->select('venuereservations.*', 'venues.name as venueName', 'venues.price as vprice')
                         ->orderBy('venuereservations.id', 'desc')
                         ->get();
        $manage_venueres=view('admin.training.venueRes')
                         ->with('allvenueresinfo',$allvenueresinfo);
        return view('admin.master')
                         ->with('admin.training.venueRes',$manage_venueres);
    }
    //ADD VENUE RESERVATION 
    public function addvenueRes(){
        $allvenueinfo=DB::table('venues')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_venue=view('admin.training.addvenueRes')
                         ->with('allvenueinfo',$allvenueinfo);
        return view('admin.master')
                         ->with('admin.training.addvenueRes',$manage_venue);
    }
    //ADD VENUE RESERVATION IN DATABASE
    public function savevenueRes(Request $request)
    {
        $this->validate($request, [
          'name'  => 'required|max:60',
          'contact_no'  => 'required|max:30',
          'start_date'  => 'required|date',
          'end_date'  => 'nullable|date',
          'venue_id'  => 'required|max:10',
          'price'  => 'required|max:30',
          'no_of_attendee'  => 'required|max:10',
          'status'  => 'required|max:5'
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['contact_no'] = $request->contact_no;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['venue_id'] = $request->venue_id;
        $data['price'] = $request->price;
        $data['no_of_attendee'] = $request->no_of_attendee;
        $data['status'] = $request->status;

        DB::table('venuereservations')->insert($data);
        Session::put('message','Venue is reserved Successfully');
        return Redirect::to('/training/addvenueRes');
    }
    //DELETE VENUE RESERVATION IN DATABASE
    public function delete_venueres($id)
    {
        DB::table('venuereservations')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'Venue Reservation is deleted Successfully');
        return Redirect::to('/training/venueRes');
    }
    //EDIT VENUE RESERVATION IN DATABASE
    public function edit_venueres($id)
    {
        $allvenueinfo=DB::table('venues')
                           ->orderBy('id', 'desc')
                           ->get();
        $venueresinfo=DB::table('venuereservations')
                           ->where('id',$id)
                           ->first();
        
        $manage_venueres=view('admin.training.editvenueRes')
                         ->with('allvenueresinfo',$venueresinfo)
                         ->with('allvenueinfo',$allvenueinfo);
        return view('admin.master')
                         ->with('admin.training.editvenueRes',$manage_venueres);
    }
    //UPDATE VENUE RESERVATION IN DATABASE
    public function update_venueres(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['contact_no'] = $request->contact_no;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['venue_id'] = $request->venue_id;
        $data['price'] = $request->price;
        $data['no_of_attendee'] = $request->no_of_attendee;
        $data['status'] = $request->status;

        DB::table('venuereservations')
             ->where('id',$id)
             ->update($data);
        Session::put('message','Venue Reservation is updated Successfully');
        return Redirect::to('/training/venueRes');
    }
    public function venueAlloc(){
        return view('admin.training.venueAlloc');
    }
}
