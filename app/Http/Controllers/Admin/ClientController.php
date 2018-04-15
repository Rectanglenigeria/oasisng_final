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
use App\Client;

class ClientController extends Controller
{
    //
    //
  	public function showCreateForm()
    {	
    	

    	return view('admin.clients.create');
    }

    public function delete($id)
    {
    	Client::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Client succefully deleted');

    }


    public function view($id)
    {
    	//Post::where('id', $id)->update(['has_viewed'=>1]);

    	$Client=Client::where('id', $id)->first();

    	return view('admin.clients.view',['Client'=>$Client]);
    }

    public function list()
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Clients=Client::orderBy('id', 'desc')->paginate(20);

    	return view('admin.clients.list', ['Clients'=>$Clients]);
    }

    public function create(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            'file' => 'required|image|mimes:jpeg,png,jpg|max:3000000',
            'name'=>'required',
            );

        $message=array(
            'file.required'=>"Client's logo is required.",
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->with('notification',"Clent's logo must either be in JPEG, PNG or JPG format. Maximum file size allowed is 3MB");

        }else{


    	if($request->hasFile('file')){
    		$file=$request->file('file');

        $fileName=$file->getClientOriginalName();

        //validate intaganographic : php script in image formData
        if(stripos($fileName, 'php')){
          return Redirect::back()->with('notification',"Client's logo name must not contain 'php' keyword. Kindly rename the logo");
        }

    		$file->move('public/uploads/clients',$file->getClientOriginalName());

    		
    		$client=new Client;

    		$client->name=$request->name;

    		$client->cover=$file->getClientOriginalName();

    		$client->save();


    		return Redirect::to(route('admin.client.list'))->with('notification','Client added succefully');
    	}else{

    		return Redirect::back()->with('notification','No logo');

    	}
    }

    }



  

  
}
