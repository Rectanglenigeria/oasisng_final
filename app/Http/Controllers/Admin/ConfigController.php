<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Post;
use App\Comment;
use App\Reply;
use App\Category;
use App\SystemConfig as Gate;
use App\PaymentMethod as Payment;

class ConfigController extends Controller
{
    //


    //
  	public function showAboutCreateForm()
    {	
    	$About=Gate::where('name','about')->first();

    	return view('admin.about.create',['About'=>$About]);
    }

   

  




    public function createAbout(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            
            'title'=>'required',
            'body'=>'required',
            'body_home'=>'required',
            );

        $message=array(
            'title.required'=>'This field is required.',
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();


        }else{


    		Gate::where('name', 'about')->update(['title'=>$request->title, 'value'=>$request->body,'value_short'=>$request->body_home, 'remember_token'=>$request->_token]);
    	

    		return Redirect::back()->with('notification','About updated succefully');
    	
    }

    }






    public function showPaymentCreateForm()
    {	

    	return view('admin.paymentmethod.create');
    }

    public function listPayment()
    {
    	$Payments=Payment::orderBy('id', 'desc')->get();

    	return view('admin.paymentmethod.list', ['Payments'=>$Payments]);
    }

    public function deletePayment($id)
    {

    	Payment::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Method succefully deleted');

    }


    public function createPayment(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            
            'name'=>'required',
            'value'=>'required',
            );

        $message=array(
            
            'value.required'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to(route('admin.paymentmethod.create'))->withErrors($validator)->withInput();

        }else{

        $payment=new Payment;

        $payment->name=$request->name;

        $payment->value=$request->value;

        $payment->remember_token=$request->_token;

        $payment->save();

    	return Redirect::back()->with('notification', 'Method added successfully');

    	}

    	
    }



}
