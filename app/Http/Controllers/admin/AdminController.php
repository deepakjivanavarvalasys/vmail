<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Roles;


class AdminController extends Controller
{
    public function addroles()
    {
        return view('admin.add_roles');
    }
    

    public function submitroles(Request $request)
    {
        $add_roles=$request->validate([
            'role_name'=> 'required|string',
            'role_status'=> 'required|integer'
        ]);

        $insert_roles= Roles::create([
            'role_name'=>$add_roles['role_name'],
            'status'=>$add_roles['role_status'] 
         ]);
        return dd($insert_roles);


    }
}
