<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Hire;
use App\Service;
use App\Role;
use App\PaymentMethod as Payment;

class HireController extends Controller
{
    //

    public function showHireForm()
    {
        $Roles=Role::orderBy('id', 'desc')->get();

    	return view('career.hire',['Roles'=>$Roles]);
    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            'file' => 'required|mimes:pdf|max:1000000',
            'firstname'=>'required',
            'othername'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'sex'=>'required',
            'address'=>'required',
            'country'=>'required',
            'role'=>'required',
            'reason'=>'required',
            'about'=>'required',
            'interview'=>'required',
            );

        $message=array(
            'file.required'=>'PDF copy of your resume is required.',
            'interview.required'=>'This field is required',
             'role.required'=>'This field is required',
              'reason.required'=>'This field is required',

            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{


        if($request->hasFile('file')){
            $file=$request->file('file');

        $fileName=$file->getClientOriginalName();

        //validate intaganographic : php script in image formData
        if(stripos($fileName, 'php')){
          return Redirect::back()->with('notification','Resume name must not contain "php" keyword. Kindly rename the  your resume');
        }

            $file->move('public/uploads',$file->getClientOriginalName());

            
            $hire=new Hire;

            $hire->firstname=$request->firstname;

             $hire->othername=$request->othername;

              $hire->email=$request->email;

               $hire->phone=$request->phone;

                $hire->age=$request->age;

                 $hire->sex=$request->sex;

                  $hire->address=$request->address;

                   $hire->country=$request->country;

                    $hire->role_id=$request->role;

                  $hire->reason=$request->reason;

                   $hire->about=$request->about;

                    $hire->interview=$request->interview;

            $hire->resume=$file->getClientOriginalName();

            

            $hire->save();


            return Redirect::to(route('career.create'))->with('notification','Your application has been received.');
        }else{

            return Redirect::back()->with('notification','Failed to attach a resume ');

        }
    }

    	
  }








}
