<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller;

use App\Testimony;
use App\Service;
use App\SystemConfig;
use App\Client;
use App\Team;
use App\Message;
use App\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function showLandingPage()
    {
        $Testimonies=Testimony::orderBy('id', 'desc')->limit('1')->get();

        $Services=Service::orderBy('id', 'asc')->get();

        $About=SystemConfig::where('name', 'about')->first();

        $Team=Team::orderBy('id', 'asc')->get();

        $Posts=Post::orderBy('id', 'desc')->limit('3')->get();

        return view('landing-page',['Testimonies'=>$Testimonies, 'Services'=>$Services,'About'=>$About, 'Team'=>$Team, 'Posts'=>$Posts]);
    }



    public function showAbout()
    {
        $About=SystemConfig::where('name', 'about')->first();

        $Team=Team::orderBy('id', 'asc')->get();

        return view('about.index',['About'=>$About, 'Team'=>$Team]);


    }


    public function listService()
    {
        
         $Services=Service::orderBy('id', 'asc')->get();

        return view('services.index',['Services'=>$Services]);


    }



    public function viewService($id)
    {
         $Service=Service::where('id', $id)->first();

        return view('services.view',['Service'=>$Service]);


    }


    public function listClient()
    {
        $Clients=Client::orderBy('id', 'asc')->get();

        $clientNo=Client::orderBy('id', 'asc')->count();

        return view('client.index', ['Clients'=>$Clients, 'clientNo'=>$clientNo]);
    }



     public function showContactForm()
    {
        return view('contact.index');
    }



    public function submitContactForm(Request $request)
    {



        $formData=$request->all();

        $rule=array(
            'name'=>'required',
            'email'=>'required',
            'body'=>'required'
            );

        $message=array(
            
            'email.required'=>'This field is required',

            );

        $validator=Validator::make($formData, $rule, $message);

        if($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{


    

       

           
            
            $message=new Message;

            $message->name=$request->name;

              $message->email=$request->email;

              $message->remember_token=$request->_token;


               $message->body=$request->body;

            

            $message->save();


            return Redirect::to(route('contact.create'))->with('notification','Your message has been received.');
    

            
    }
        
    }




}
