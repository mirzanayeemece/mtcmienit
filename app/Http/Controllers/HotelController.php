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
          'name'  => ['required', 'string', 'max:100','unique:buildings'],
          'type_id' => ['required'],
          'description'  => ['max:255']
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
    //SAVE BUILDING-TYPE TO DATABASE
    public function save_building_type(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:building_types'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('building_types')->insert($data);
        Session::put('message','Building Type is Added Successfully');
        return Redirect::to('/hotel_management/building/addbuildingtype');
    }

    //FLOOR
    public function floor(){
        $floors_info=DB::table('floors')
                           ->orderBy('id', 'desc')
                           ->get();
        $floor_type_info=DB::table('floor_types')
                           ->orderBy('id', 'desc')
                           ->get();
        $building_info=DB::table('buildings')
                           ->orderBy('id', 'desc')
                           ->get();

        $manage_floors=view('admin.hotel_management.floor.floor_list')
                         ->with('floors_info',$floors_info)
                         ->with('floor_type_info',$floor_type_info)
                         ->with('building_info',$building_info);
        return view('admin.master')
                         ->with('admin.hotel_management.floor.floor_list',$manage_floors);
    }
    //ADD-FLOOR
    public function add_floor(){

        $floor_type_info = DB::table('floor_types')
                            ->orderBy('id','desc')
                            ->get();
        $building_info = DB::table('buildings')
                            ->orderBy('id','desc')
                            ->get();

        $manage_floor = view('admin.hotel_management.floor.addfloor')
                            ->with('building_info',$building_info)
                            ->with('floor_type_info',$floor_type_info);

        return view('admin.master')
                        ->with('admin.hotel_management.floor.addfloor',$manage_floor);
    }
    //SAVE FLOOR TO DATABASE
    public function save_floor(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:floors'],
          'building_id' => ['required'],
          'type_id' => ['required'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['building_id'] = $request->building_id;
        $data['floor_type'] = $request->type_id;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        

        DB::table('floors')->insert($data);
        Session::put('message','Floor is Added Successfully');
        return Redirect::to('/hotel_management/floor/addfloor');
    }
    //FLOOR-TYPE
    public function floor_type(){
        $floor_type_list_info=DB::table('floor_types')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_floor_types=view('admin.hotel_management.floor.floor_type_list')
                         ->with('floor_type_list_info',$floor_type_list_info);
        return view('admin.master')
                         ->with('admin.hotel_management.floor.floor_type_list',$manage_floor_types);
    }
    //ADD-FLOOR-TYPE
    public function add_floor_type(){

        return view('admin.hotel_management.floor.addfloortype');
    }
    //SAVE FLOOR-TYPE TO DATABASE
    public function save_floor_type(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100','unique:floor_types'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('floor_types')->insert($data);
        Session::put('message','Floor Type is Added Successfully');
        return Redirect::to('/hotel_management/floor/addfloortype');
    }


    //-------ROOM-------//
    //ROOM
    public function room(){
        $rooms_info=DB::table('rooms')
                           ->orderBy('id', 'desc')
                           ->get();
        $room_category_info=DB::table('room_categories')
                           ->orderBy('id', 'desc')
                           ->get();
        $floor_info=DB::table('floors')
                           ->orderBy('id', 'desc')
                           ->get();
        $building_info=DB::table('buildings')
                           ->orderBy('id', 'desc')
                           ->get();

        $manage_rooms=view('admin.hotel_management.room.room_list')
                         ->with('floor_info',$floor_info)
                         ->with('rooms_info',$rooms_info)
                         ->with('room_category_info',$room_category_info)
                         ->with('building_info',$building_info);
        return view('admin.master')
                         ->with('admin.hotel_management.room.room_list',$manage_rooms);
    }
    //ADD-FLOOR
    public function add_room(){

        $room_category_info = DB::table('room_categories')
                            ->orderBy('id','desc')
                            ->get();
        $building_info = DB::table('buildings')
                            ->orderBy('id','desc')
                            ->get();
        $floor_info = DB::table('floors')
                            ->orderBy('id','desc')
                            ->get();

        $manage_room = view('admin.hotel_management.room.addroom')
                            ->with('building_info',$building_info)
                            ->with('floor_info',$floor_info)
                            ->with('room_category_info',$room_category_info);

        return view('admin.master')
                        ->with('admin.hotel_management.room.addroom',$manage_room);
    }
    //SAVE ROOM TO DATABASE
    public function save_room(Request $request)
    {
        $this->validate($request, [
          'room_no'  => ['required', 'string', 'max:100','unique:rooms'],
          'price'  => ['required', 'integer', 'min:0'],
          'capacity'  => ['required', 'integer', 'min:0'],
          'floor_id' => ['required', 'integer'],
          'type_id' => ['required', 'integer'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['room_no'] = $request->room_no;
        $data['price'] = $request->price;
        $data['persons_capacity'] = $request->capacity;
        $data['category_id'] = $request->type_id;
        $data['floor_id'] = $request->floor_id;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        

        DB::table('rooms')->insert($data);
        Session::put('message','Room is Added Successfully');
        return Redirect::to('/hotel_management/room/addroom');
    }
    //ROOM-TYPE
    public function room_category(){
        $room_category_list_info=DB::table('room_categories')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_room_category=view('admin.hotel_management.room.room_category_list')
                         ->with('room_category_list_info',$room_category_list_info);
        return view('admin.master')
                         ->with('admin.hotel_management.room.room_category_list',$manage_room_category);
    }
    //ADD-ROOM-TYPE
    public function add_room_category(){

        return view('admin.hotel_management.room.addroomcategory');
    }
    //SAVE ROOM-CATEGORY TO DATABASE
    public function save_room_category(Request $request)
    {
        $this->validate($request, [
          'name'  => ['required', 'string', 'max:100', 'unique:room_categories'],
          'price'  => ['required', 'integer', 'min:0'],
          'vat'  => ['required', 'integer', 'min:0'],
          'description'  => ['max:255']
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['price'] = $request->price;
        $data['vat'] = $request->vat;
        $data['description'] = $request->description;
        $data['created_at'] = now();
        
        DB::table('room_categories')->insert($data);
        Session::put('message','Room Category is Added Successfully');
        return Redirect::to('/hotel_management/room/addroomcategory');
    }
}
