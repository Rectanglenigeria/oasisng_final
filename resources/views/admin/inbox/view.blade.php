 
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
                                    <li class="breadcrumb-item"><a href="#">View Message</a></li>
                                </ol>

                            </div>
                        </div>









                <div class="row">

                            <div class="col-12">

                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            View message
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
                                                    <label>Name</label>
                                                    <input class="form-control"  value="{{$Inbox->name}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>

                                       


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"  value="{{$Inbox->email}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        






                                       


                                       



                                        
                                         <hr>
                                        <legend>
                                            Message
                                        </legend>



                                      
                                       
                                      


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Message</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Inbox->body}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                     





  <hr>
                                       
                                        <hr>
                                        <legend>Actions</legend>

                                        <a href="mailto:{{$Inbox->email}}" class="btn btn-sm btn-primary">Reply</a>
                                        <a href="{{route('admin.inbox.list')}}" class="btn btn-sm btn-primary">Back</a>
                                         <a href="{{route('admin.inbox.view', ['id'=>$Inbox->id])}}" class="btn btn-sm btn-primary">view</a>

                                       
                                                             
                                         <a class="btn btn-sm btn-danger" href="{{route('admin.inbox.delete', ['id'=>$Inbox->id])}}">Delete</a>
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