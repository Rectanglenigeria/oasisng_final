<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Inbox;


class InboxController extends Controller
{
    //
    //

    public function delete($id)
    {
    	Inbox::where('id', $id)->delete();

    	return Redirect::to(route('admin.inbox.list'))->with('notification','Message succefully deleted');

    }

    public function view($id)
    {


    	$Inbox=Inbox::where('id', $id)->first();

    	return view('admin.inbox.view',['Inbox'=>$Inbox]);
    }

    public function list()
    {
    	$Inbox=Inbox::orderBy('id', 'desc')->paginate(20);

    	return view('admin.inbox.list', ['Inbox'=>$Inbox]);
    }

    public function complete($id)
    {

    	return Redirect::back()->with('notification','Completed');
    }
}
