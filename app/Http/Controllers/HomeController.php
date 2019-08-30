<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                         ->select('venuereservations.*', 'venues.name as venueName')
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
          'no_of_attendee'  => 'required|max:10',
          'status'  => 'required|max:5'
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['contact_no'] = $request->contact_no;
        $data['start_date'] = $request->start_date;
        $data['end_date'] = $request->end_date;
        $data['venue_id'] = $request->venue_id;
        $data['no_of_attendee'] = $request->no_of_attendee;
        $data['status'] = $request->status;

        DB::table('venuereservations')->insert($data);
        Session::put('message','Venue is reserved Successfully');
        return Redirect::to('/training/addvenueRes');
    }
    public function venueAlloc(){
        return view('admin.training.venueAlloc');
    }

    

    // --- METHODS FOR USER --- //
    //USER
    public function user(){
        $all_users_info=DB::table('users')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_users=view('admin.admin.user.user')
                         ->with('all_users_info',$all_users_info);
        return view('admin.master')
                         ->with('admin.admin.user.user',$manage_users);
    }
    //ADD USER
    public function adduser(){
        return view('admin.admin.user.adduser');
    }
    //ADD USER TO DATABASE
    public function saveuser(Request $request)
    {
        $this->validate($request, [
          'name'  => 'required', 'string', 'max:255',
          'email'  => 'required', 'string', 'email', 'max:255', 'unique:users',
          'password'  => 'required', 'string', 'min:6', 'confirmed',
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = now();
        

        DB::table('users')->insert($data);
        Session::put('message','Venue is Added Successfully');
        return Redirect::to('/admin/user/adduser');
    }
    //DELETE USER FROM DATABASE
    public function delete_user($id)
    {
        DB::table('users')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'User has been deleted Successfully');
        return Redirect::to('/admin/user/user');
    }
    //EDIT USER IN DATABASE
    public function edit_user($id)
    {
        $user_info=DB::table('users')
                           ->where('id',$id)
                           ->first();
        
        $manage_user=view('admin.admin.user.edituser')
                         ->with('all_users_info',$user_info);
        return view('admin.master')
                         ->with('admin.admin.user.edituser',$manage_user);
    }
    //UPDATE USER IN DATABASE
    public function update_user(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;

        DB::table('users')
             ->where('id',$id)
             ->update($data);
        Session::put('message','User has been updated Successfully');
        return Redirect::to('/admin/user/user');
    }
}
