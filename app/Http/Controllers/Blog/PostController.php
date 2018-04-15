<?php

namespace App\Http\Controllers\Blog;

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

    public function list()
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$CategoryDetails=Category::orderBy('id', 'desc')->get();

        $Categories=Category::orderBy('id', 'desc')->get();

    	$Posts=Post::orderBy('id', 'desc')->paginate(20);

    	return view('blog.posts.list', ['Posts'=>$Posts, 'CategoryDetails'=>$CategoryDetails, 'Categories'=>$Categories]);
    }


    public function filterByCategory($id)
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Categories=Category::orderBy('id', 'desc')->get();

    	$CategoryDetails=Category::where('id',$id)->first();

    	$Posts=Post::where('category_id', $id)->orderBy('id', 'desc')->paginate(20);

    	return view('blog.posts.list', ['Posts'=>$Posts, 'Categories'=>$Categories, 'CategoryDetails'=>$CategoryDetails]);
    }


    public function view($id)
    {
    	$Categories=Category::orderBy('id', 'desc')->get();

    	$Post=Post::where('id', $id)->first();

    	$RecentPosts=Post::orderBy('id', 'desc')->limit('4')->get();

    	return view('blog.posts.view', ['Post'=>$Post, 'Categories'=>$Categories, 'RecentPosts'=>$RecentPosts]);

    }
}
