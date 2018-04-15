<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
    //

     //

    public function showCreateForm()
    {	

    	return view('admin.role.create');
    }

    public function list()
    {
    	$Roles=Role::orderBy('id', 'desc')->get();

    	return view('admin.role.list', ['Roles'=>$Roles]);
    }

    public function delete($id)
    {

    	Role::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Role succefully deleted');

    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            
            'name'=>'required',

             'desc'=>"required",
            );

        $message=array(
            
            'name.desc'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to(route('admin.role.create'))->withErrors($validator)->withInput();

        }else{

        $role=new Role;

        $role->name=$request->name;

        $role->desc=$request->desc;

        $role->remember_token=$request->_token;

        $role->save();

    	return Redirect::to(route('admin.role.list'))->with('notification', 'Role created successfully');

    	}

    	
    }
}
