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
                                    <li class="breadcrumb-item"><a href="#">Contact Message(s)</a></li>
                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Achived&nbsp; <label class="badge">{{count($Inbox)}}</label></h3>
                            <br>


                            <!--data table-->

                            <!--data table-->

                             <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>                   

                                </thead>


                                <tbody>

                                                 <?php $count=1;?>
                                                       @foreach($Inbox as $inbox)

                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$inbox->created_at}}</td>
                                                        <td>{{$inbox->name}}</td>
                                                        <td>{{$inbox->email}}</td>
                                                        <td>

                                                            @if($inbox->has_viewed==1)

                                                            <label class="label label-success">completed</label>

                                                            @elseif($inbox->has_completed==1)
                                                            
                                                            <label class="label label-primary">read</label>
                                                        
                                                            @else
                                                            <label class="label label-info">New</label>

                                                            @endif


                                                        </td>
                                                        <td>
                                                            <a href="{{route('admin.inbox.view', ['id'=>$inbox->id])}}" class="btn btn-sm btn-primary">view</a>

                                                             @if($inbox->has_completed < 0)
                                         <a href="{{route('admin.inbox.completed', ['id'=>$inbox->id])}}" class="btn btn-sm btn-primary">Done</a>
                                         @endif
                                                             
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.inbox.delete', ['id'=>$inbox->id])}}">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php $count++; ?>
                                                    @endforeach
                                
                          
                                </tbody>
                            </table>

                            <!--data table-->
                            <!--data table-->

                             <center>
                                {{$Inbox->links()}}
                            </center>
                            
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->


@endsection