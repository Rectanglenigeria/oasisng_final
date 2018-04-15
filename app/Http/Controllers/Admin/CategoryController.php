<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;

class CategoryController extends Controller
{
    //

    //

    //

    public function showCreateForm()
    {	

    	return view('admin.category.create');
    }

    public function list()
    {
    	$Categories=Category::orderBy('id', 'desc')->get();

    	return view('admin.category.list', ['Categories'=>$Categories]);
    }

    public function delete($id)
    {

    	Category::where('id', $id)->delete();

        Post::where('category_id',$id)->delete();

    	return Redirect::back()->with('notification','Category succefully deleted');

    }


    public function create(Request $request)
    {

    	$formData=$request->all();

        $rule=array(
            
            'name'=>'required',
            'desc'=>'required',
            );

        $message=array(
            
            'desc.required'=>'This field is required'
            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::to(route('admin.category.create'))->withErrors($validator)->withInput();

        }else{

        $category=new Category;

        $category->name=$request->name;

        $category->desc=$request->desc;

        $category->remember_token=$request->_token;

        $category->save();

    	return Redirect::to(route('admin.category.list'))->with('notification', 'Category created successfully');

    	}

    	
    }
}
