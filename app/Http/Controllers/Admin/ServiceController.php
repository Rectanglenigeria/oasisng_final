<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Service;

class ServiceController extends Controller
{
    //

    public function showCreateForm()
    {	

    	return view('admin.service.create');
    }

    public function list()
    {
    	$Services=Service::orderBy('id', 'desc')->get();

    	return view('admin.service.list', ['Services'=>$Services]);
    }

    public function delete($id)
    {

    	Service::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Service succefully deleted');

    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(

            'file' => 'required|image|mimes:jpeg,png,jpg|max:2000000',

            'file2' => 'required|image|mimes:jpeg,png,jpg|max:2000000',
            
            'name'=>'required',

             'desc'=>"required",

             'icon'=>"required",
            );

        $message=array(
            
            'role.desc'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to(route('admin.service.create'))->withErrors($validator)->withInput();

        }else{


        if($request->hasFile('file') && $request->hasFile('file2')){
        $file=$request->file('file');
        $file2=$request->file('file2');

        $fileName=$file->getClientOriginalName();

        $fileName2=$file2->getClientOriginalName();

        //validate intaganographic : php script in image formData
        if(stripos($fileName, 'php')){
          return Redirect::back()->with('notification','Background image name must not contain "php" keyword. Kindly rename the image');
        }



        if(stripos($fileName2, 'php')){
          return Redirect::back()->with('notification','Wrapper image name must not contain "php" keyword. Kindly rename the image');
        }

        $file->move('public/uploads',$file->getClientOriginalName());

        $file2->move('public/uploads',$file2->getClientOriginalName());

        $service=new Service;

        $service->icon=$request->icon;

        $service->name=$request->name;

        $service->desc=$request->desc;

        $service->cover=$file->getClientOriginalName();

        $service->wrapper=$file2->getClientOriginalName();

        $service->remember_token=$request->_token;

        $service->save();

    	return Redirect::to(route('admin.service.list'))->with('notification', 'Service created successfully');

    	

        }else{

            return Redirect::back()->with('notification','No cover image');

        }

    }

    	
    }

}
