<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function addrole(Request $request){
        $request->validate([
            // 'role_id' => 'required',
            'role_name' => 'required'

        ]);

        // $role['role_id'] = $request->role_id;
        $role['role_name'] = $request->role_name;
        // dd($role);


        // dd($role);

        $role = Role::create($role);

        if($role){
            return redirect(route('addRole'));
        }
        

        // if($role == TRUE){
        //     dd("role added");
        // }else{
        //     dd("Not added");
        // }

    }
}
