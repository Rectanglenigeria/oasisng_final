<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Post;
use App\Hire;
use App\Service;


class HomeController extends Controller
{
    //

    public function index()
    {

    	$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Hires=Hire::orderBy('id','desc')->limit('5')->get();

    	$Services=Service::orderBy('id', 'desc')->get();

    	return view('admin.home',['Posts'=>$Posts, 'Hires'=>$Hires,'Services'=>$Services]);
    }

    public function list()
    {
    	//$Posts=Post::orderBy('id', 'desc')->limit('5')->get();

    	$Posts=Post::orderBy('id', 'desc')->paginate(20);

    	return view('admin.posts.list', ['Posts'=>$Posts]);
    }
}
