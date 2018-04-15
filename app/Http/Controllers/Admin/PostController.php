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

class PostController extends Controller
{
    //
  	public function showCreateForm()
    {	
    	$Categories=Category::orderBy('id','desc')->get();

    	return view('admin.posts.create',['Categories'=>$Categories]);
    }

    public function delete($id)
    {
    	Reply::where('post_id', $id)->delete();

    	Comment::where('post_id', $id)->delete();

    	Post::where('id', $id)->delete();

    	return Redirect::back()->with('notification','Post succefully deleted');

    }


    public function view($id)
    {
    	//Post::where('id', $id)->update(['has_viewed'=>1]);

    	$Post=Post::where('id', $id)->first();

    	return view('admin.posts.view',['Post'=>$Post]);
    }

    public function list()
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Posts=Post::orderBy('id', 'desc')->paginate(20);

    	return view('admin.posts.list', ['Posts'=>$Posts]);
    }

    public function create(Request $request)
    {
    	$formData=$request->all();

        $rule=array(
            'file' => 'required|image|mimes:jpeg,png,jpg|max:3000000',
            'title'=>'required',
            'sub_title'=>'required',
            'body'=>'required',
            'category'=>'required',
            );

        $message=array(
            'file.required'=>'Cover image is required.',
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();;

        }else{


    	if($request->hasFile('file')){
    		$file=$request->file('file');

        $fileName=$file->getClientOriginalName();

        //validate intaganographic : php script in image formData
        if(stripos($fileName, 'php')){
          return Redirect::back()->with('notification','Cover image name must not contain "php" keyword. Kindly rename the image');
        }

    		$file->move('public/uploads',$file->getClientOriginalName());

    		
    		$post=new Post;

    		$post->category_id=$request->category;

    		$post->title=$request->title;

            $post->sub_title=$request->sub_title;

    		$post->body=$request->body;

    		$post->views=0;

    		$post->cover=$file->getClientOriginalName();

    		$post->admin_id=Auth::guard('admin')->user()->id;

    		$post->save();


    		return Redirect::to(route('admin.post.list'))->with('notification','Post created succefully');
    	}else{

    		return Redirect::back()->with('notification','No cover image');

    	}
    }

    }



    public function deleteComment($id)
    {
        $post_id=Comment::where('id', $id)->first()->post_id;

        Comment::where('id', $id)->delete();

        return Redirect::to(route('admin.post.view',['id'=>$post_id]))->with('notification','Comment succefully deleted');

    }


      public function blockComment($id)
    {
       

        Post::where('id', $id)->update(['allow_comment'=>0]);

        return Redirect::back()->with('notification','Comment succefully disabled');

    }

    public function unblockComment($id)
    {
       

        Post::where('id', $id)->update(['allow_comment'=>1]);

        return Redirect::back()->with('notification','Comment succefully enabled');

    }

}
