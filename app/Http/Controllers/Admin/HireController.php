<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Hire;

class HireController extends Controller
{
    //

    public function delete($id)
    {
    	Hire::where('id', $id)->delete();

    	return Redirect::to(route('admin.request.list'))->with('notification','Request succefully deleted');

    }

    public function view($id)
    {

    	Hire::where('id', $id)->update(['has_viewed'=>1]);

    	$Hire=Hire::where('id', $id)->first();

    	return view('admin.hires.view',['Hire'=>$Hire]);
    }

    public function list()
    {
    	$Hires=Hire::orderBy('id', 'desc')->paginate(20);

    	return view('admin.hires.list', ['Hires'=>$Hires]);
    }

    public function complete($id)
    {
    	Hire::where('id', $id)->update(['has_completed'=>1]);

    	return Redirect::back()->with('notification','task completed');
    }
}
