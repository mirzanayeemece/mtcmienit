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

class HotelController extends Controller
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

    //------- METHODS FOR BUILDING --------//
    //BUILDING
    public function building(){
        $all_buildings_info=DB::table('buildings')
                           ->orderBy('id', 'desc')
                           ->get();
        $building_type_info=DB::table('building_types')
                           ->orderBy('id', 'desc')
                           ->get();



        $manage_buildings=view('admin.hotel_management.building.building_list')
                         ->with('all_buildings_info',$all_buildings_info)
                         ->with('building_type_info',$building_type_info);
        return view('admin.master')
                         ->with('admin.hotel_management.building.building_list',$manage_buildings);
    }

    //ADD-BUILDING
    public function add_building(){

        $building_type_info = DB::table('building_types')
                            ->orderBy('id','desc')
                            ->get();
        $manage_building_type = view('admin.hotel_management.building.addbuilding')
                            ->with('building_type_info',$building_type_info);

        return view('admin.master')
                        ->with('admin.hotel_management.building.addbuilding',$manage_building_type);
    }
    //SAVE BUILDING TO DATABASE
    public function save_building(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'type_id' => ['required'],
          'description'  => ['string', 'max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['building_type'] = $request->type_id;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        

        DB::table('buildings')->insert($data);
        Session::put('message','Building is Added Successfully');
        return Redirect::to('/hotel_management/building/addbuilding');
    }

    //BUILDING-TYPE
    public function building_type(){
        $building_type_list_info=DB::table('building_types')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_building_types=view('admin.hotel_management.building.building_type_list')
                         ->with('building_type_list_info',$building_type_list_info);
        return view('admin.master')
                         ->with('admin.hotel_management.building.building_type_list',$manage_building_types);
    }

    //ADD-BUILDING-TYPE
    public function add_building_type(){

        return view('admin.hotel_management.building.addbuildingtype');
    }
    //SAVE USER TO DATABASE
    public function save_building_type(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100'],
          'description'  => ['string', 'max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        

        DB::table('building_types')->insert($data);
        Session::put('message','Building Type is Added Successfully');
        return Redirect::to('/hotel_management/building/addbuildingtype');
    }

}
