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

                            <div class="col-12">

                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Latest Job Applications &nbsp; <label class="badge">{{count($Hires)}}</label>
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
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Date</th>
                                                        <th>Position</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php $count=1;?>
                                                       @foreach($Hires as $Hire)


                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$Hire->created_at}}</td>
                                                        <td>{{$Hire->role->name}}</td>
                                                        <td>{{$Hire->email}}</td>
                                                        <td>{{$Hire->phone}}</td>
                                                        <td>

                                                            @if($Hire->has_viewed==1)

                                                            <label class="label label-success">completed</label>

                                                            @elseif($Hire->has_completed==1)
                                                            
                                                            <label class="label label-primary">read</label>
                                                        
                                                            @else
                                                            <label class="label label-info">New</label>

                                                            @endif


                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin.request.view', ['id'=>$Hire->id])}}" class="btn btn-sm btn-primary">view</a>
                                                             
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.request.delete', ['id'=>$Hire->id])}}">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php $count++; ?>
                                                    @endforeach


                                                 
                                                   

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>









                        <div class="row">

                            <div class="col-12">

                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Latest Posts &nbsp; <label class="badge">{{count($Posts)}}</label>
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
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Date</th>
                                                        <th>Category</th>
                                                        <th>Title</th>
                                                        <th>No comments</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php $count=1;?>
                                                          @foreach($Posts as $Post)

                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$Post->created_at}}</td>
                                                        <th>{{$Post->category->name}}</th>
                                                        <td>{{$Post->title}}</td>
                                                        <td>{{count($Post->comments)}}</td>
                                                        
                                                        <td>
                                                            <a href="{{route('admin.post.view',['id'=>$Post->id])}}" class="btn btn-sm btn-primary">view</a>
                                                             
                                                              <a class="btn btn-sm btn-danger" href="{route('admin.post.delete',['id'=>$Post->id])}}">Delete</a>
                                                        </td>
                                                    </tr>

                                                    @endforeach


                                                  

                                                   

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        
















                    </div> <!-- container -->

                </div> <!-- content -->





@endsection
