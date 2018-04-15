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
use App\Team;

class TeamController extends Controller
{

	//
    //
  	public function showCreateForm()
    {	
    	

    	return view('admin.teams.create');
    }

    public function delete($id)
    {
    	Team::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Staff succefully deleted');

    }


    public function view($id)
    {
    	//Post::where('id', $id)->update(['has_viewed'=>1]);

    	$Team=Team::where('id', $id)->first();

    	return view('admin.teams.view',['Team'=>$Team]);
    }

    public function list()
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Teams=Team::orderBy('id', 'desc')->paginate(20);

    	return view('admin.teams.list', ['Teams'=>$Teams]);
    }

    public function create(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            'file' => 'required|image|mimes:jpeg,png,jpg|max:3000000',
            'name'=>'required',
            'role'=>'required',
            'fb_link'=>'required',
            'ln_link'=>'required',

            );

        $message=array(
            'file.required'=>"Picture is required.",
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->with('notification',"Picture must either be in JPEG, PNG or JPG format. Maximum file size allowed is 3MB");

        }else{


    	if($request->hasFile('file')){
    		$file=$request->file('file');

        $fileName=$file->getClientOriginalName();

        //validate intaganographic : php script in image formData
        if(stripos($fileName, 'php')){
          return Redirect::back()->with('notification',"Picture name must not contain 'php' keyword. Kindly rename the picture");
        }

    		$file->move('public/uploads/team',$file->getClientOriginalName());

    		
    		$team=new Team;

    		$team->name=$request->name;
    		$team->role=$request->role;
    		$team->fb_link=$request->fb_link;
    		$team->ln_link=$request->ln_link;

    		$team->cover=$file->getClientOriginalName();

    		$team->save();


    		return Redirect::to(route('admin.team.list'))->with('notification','Staff added succefully');
    	}else{

    		return Redirect::back()->with('notification','No picture');

    	}
    }

    }
}
