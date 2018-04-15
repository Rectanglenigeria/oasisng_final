 
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
                                    <li class="breadcrumb-item"><a href="#">Request</a></li>
                                </ol>

                            </div>
                        </div>









                <div class="row">

                            <div class="col-12">

                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            View application
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse show" style="">
                                        <div class="portlet-body">



                                            
                                <form action="http://glob.dev/invest" method="POST" role="form">

                                    <legend>Profile</legend>

                                    <div class="form-body">

                                   



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Firstname</label>
                                                    <input class="form-control"  value="{{$Hire->firstname}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Othername(s)</label>
                                                    <input class="form-control"  value="{{$Hire->othername}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"  value="{{$Hire->email}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control"  value="{{$Hire->phone}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input class="form-control"  value="{{$Hire->age}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Sex</label>
                                                    <input class="form-control"  value="{{$Hire->sex}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Address</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Hire->address}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <input class="form-control"  value="{{$Hire->country}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                       


                                       



                                        
                                         <hr>
                                        <legend>
                                            Job details
                                        </legend>



                                      
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input class="form-control"  value="{{$Hire->role->name}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>

                                      


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Why do you want the position?</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Hire->reason}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Describe yourself in five(5) lines</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Hire->about}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>If we want to interview you, what are the best days/time for you?</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Hire->interview}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Resume</label>
                                                    <br>
                                                    <a target="_blank" href="{{asset('uploads/'.$Hire->resume)}}">Download here</a>
                                                    
                                                </div>

                                            </div>
                                        </div>




                                         <hr>
                                        <legend>Status</legend>
                                        @if($Hire->has_viewed==1)

                                                            <label class="label label-success">completed</label>

                                                            @elseif($Hire->has_completed==1)
                                                            
                                                            <label class="label label-primary">read</label>
                                                        
                                                            @else
                                                            <label class="label label-info">New</label>

                                        @endif

                                        <hr>
                                        <legend>Actions</legend>

                                        <a href="{{route('admin.request.list')}}" class="btn btn-sm btn-primary">Back</a>
                                         <a href="{{route('admin.request.view', ['id'=>$Hire->id])}}" class="btn btn-sm btn-primary">view</a>

                                         @if($Hire->has_completed < 0)
                                         <a href="{{route('admin.request.completed', ['id'=>$Hire->id])}}" class="btn btn-sm btn-primary">Done</a>
                                         @endif
                                                             
                                         <a class="btn btn-sm btn-danger" href="{{route('admin.request.delete', ['id'=>$Hire->id])}}">Delete</a>
                                    </div>
                                </form>



                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        

                    </div> <!-- container -->

                </div> <!-- content -->


                @endsection