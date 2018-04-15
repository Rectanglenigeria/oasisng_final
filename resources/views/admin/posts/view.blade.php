
@extends('layouts.admin')

@section('content')


  <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Oasis</a></li>
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                </ol>

                            </div>
                        </div>








                         <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="m-t-0">
                                {{$Post->title}}
                            </h3>
                            <hr>

                            <p class="text-dark header-title m-t-0" style="line-height: 20px;">
                                {{$Post->sub_title}}
                            </p>
                            <br>


                           <div class="card-body">
                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{asset('uploads/'.$Post->cover)}}" style="width: 100%;">
                                            </div>
                                        </div>

                                        <br>
                                        

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                
                                                    
                                                   <div>
                                                    {!!html_entity_decode($Post->body)!!}
                                                    
                                                   </div>
                                               
                                            </div>
                                        </div>

                                       <hr>



                                       <!--comment-->

                                       <div class="row">

                                        <div class="col-md-12">

                                            @foreach($Post->comments as $comment)
                                            <ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left">
                                                    <a href="#">
                                                       <img class="media-object" src="http://0.gravatar.com/avatar/0c661574016319819b09715da00dc310?s=50&amp;d=mm&amp;r=g" alt="...">
                                                    </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>&nbsp;&nbsp;&nbsp;{{$comment->name}}</p>
                                                    <p>&nbsp;&nbsp;&nbsp;{{$comment->body}}</p>
                                                    <a href="{{route('admin.comment.delete',['id'=>$comment->id])}}" class="btn btn-sm btn-danger">delete</a>

                                                           

                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>
                                            @endforeach



                                            
                                        </div>
                                           
                                       </div>

                                       <a href="{{route('admin.post.list')}}" class="btn btn-sm btn-primary">Back</a>

                                       
                                      
                                       


                                    </div>
                            
                            </div>
                            
                            
                        </div>
                    </div>
                   


                </div>



                       




                     

              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection