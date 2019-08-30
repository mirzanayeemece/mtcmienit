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

class AdminController extends Controller
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
    
    // --- METHODS FOR USERROLE --- //
    //USERROLE
    public function userrole(){
        $all_userrole_info=DB::table('roles')
                           ->orderBy('id', 'desc')
                           ->get();
        $manage_userrole=view('admin.admin.user_role.userrole')
                         ->with('all_userrole_info',$all_userrole_info);
        return view('admin.master')
                         ->with('admin.admin.user_role.userrole',$manage_userrole);
    }
    //ADD USERROLE
    public function addrole(){
        return view('admin.admin.user_role.adduserrole');
    }
    //ADD USERROLE IN DATABASE
    public function saverole(Request $request)
    {
        $this->validate($request, [
          'name'  => 'required|max:50',
          'description'  => 'required|max:120',
          
        ]);
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('roles')->insert($data);
        Session::put('message','User Role is Added Successfully');
        return Redirect::to('/admin/user_role/adduserrole');
    }
    //EDIT USERROLE IN DATABASE
    public function edit_user_role($id)
    {
        $userrole_info=DB::table('roles')
                           ->where('id',$id)
                           ->first();
        
        $manage_user_role=view('admin.admin.user_role.edituserrole')
                         ->with('all_userrole_info',$userrole_info);
        return view('admin.master')
                         ->with('admin.admin.user_role.edituserrole',$manage_user_role);
    }
    //UPDATE USERROLE IN DATABASE
    public function update_user_role(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['description'] = $request->description;

        DB::table('roles')
             ->where('id',$id)
             ->update($data);
        Session::put('message','User Role has been updated Successfully');
        return Redirect::to('/admin/user_role/userrole');
    }
    //DELETE USERROLE FROM DATABASE
    public function delete_user_role($id)
    {
        DB::table('roles')
                ->where('id',$id)
                ->delete();
        Session::put('message', 'User Role has been deleted Successfully');
        return Redirect::to('/admin/user_role/userrole');
    }
}
