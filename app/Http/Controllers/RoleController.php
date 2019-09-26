<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Role;



class RoleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function manageRole()
    {
        $roles = Role::where('parent_id', '=', 0)->get();
        $allRoles = Role::pluck('name','id')->all();

        return view('admin/admin/role_wise_permission/role_wise_permission',compact('roles','allRoles'));
    }

    

}