
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
                                    <li class="breadcrumb-item"><a href="#">Staffs</a></li>
                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Achived staffs &nbsp; <label class="badge">{{count($Teams)}}</label></h3>

                            <br>


                            <!--data table-->

                             <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                   <th>S/N</th>
                                   <th>Date</th>
                                   
                                    <th>Name</th>

                                    <th>Position</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>

                                           <?php $count=1;?>
                                                          @foreach($Teams as $team)

                                <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$team->created_at}}</td>
                                                        <th>{{$team->name}}</th>
                                                        <td>{{$team->role}}</td>
                                                        
                                                        
                                                        <td>

                                                            <a href="{{route('admin.team.view',['id'=>$team->id])}}" class="btn btn-sm btn-primary">view</a>

                                                           
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.team.delete',['id'=>$team->id])}}">Delete</a>
                                                        </td>
                                </tr>

                                <?php
                                    $count++;
                                ?>

                                @endforeach


                                 

                                
                                
                          
                                </tbody>
                            </table>

                            <!--data table-->

                            <center>
                                {{$Teams->links()}}
                            </center>
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection