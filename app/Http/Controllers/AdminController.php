<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
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

}
