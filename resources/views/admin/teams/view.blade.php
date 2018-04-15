
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
                                    <li class="breadcrumb-item"><a href="#">Staff</a></li>
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
                                {{$Team->name}}
                            </h3>
                            <hr>

                            <p class="text-dark header-title m-t-0" style="line-height: 20px;">
                                {{$Team->role}}
                            </p>

                            <p class="text-dark header-title m-t-0" style="line-height: 20px;">
                                {{$Team->fb_link}}
                            </p>

                            <p class="text-dark header-title m-t-0" style="line-height: 20px;">
                                {{$Team->ln_link}}
                            </p>
                            <br>


                           <div class="card-body">
                                    <div class="form-body">
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img style="width: 30%;" src="{{asset('uploads/team/'.$Team->cover)}}" style="width: 100%;">
                                            </div>
                                        </div>

                                        <br>
                                        

                                        

                                       <hr>



                                       <!--comment-->

                                      

                                       <a href="{{route('admin.team.list')}}" class="btn btn-sm btn-primary">Back</a>

                                       
                                      
                                       


                                    </div>
                            
                            </div>
                            
                            
                        </div>
                    </div>
                   


                </div>



                       




                     

              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection