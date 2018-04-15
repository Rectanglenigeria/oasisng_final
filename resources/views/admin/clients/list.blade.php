
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
                                    <li class="breadcrumb-item"><a href="#">Clients</a></li>
                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Achived clients &nbsp; <label class="badge">{{count($Clients)}}</label></h3>

                            <br>


                            <!--data table-->

                             <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                   <th>S/N</th>
                                   <th>Date</th>
                                   
                                    <th>Name</th>
                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>

                                           <?php $count=1;?>
                                                          @foreach($Clients as $client)

                                <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$client->created_at}}</td>
                                                        <th>{{$client->name}}</th>
                                                        
                                                        
                                                        <td>

                                                            <a href="{{route('admin.client.view',['id'=>$client->id])}}" class="btn btn-sm btn-primary">view</a>

                                                           
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.client.delete',['id'=>$client->id])}}">Delete</a>
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
                                {{$Clients->links()}}
                            </center>
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection