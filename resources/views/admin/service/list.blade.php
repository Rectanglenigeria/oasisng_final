
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
                                    <li class="breadcrumb-item"><a href="#">Service</a></li>
                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Achived services &nbsp; <label class="badge">{{count($Services)}}</label></h3>

                            <br>


                            <!--data table-->

                             <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                   <th>S/N</th>
                                   <th>Date</th>
                                   <th>Name</th>
                                    <th>Description</th>

                                     <th>Background Image</th>

                                      <th>Wrapper</th>

                                    <th>Action</th>

                                </tr>
                                </thead>


                                <tbody>

                                           <?php $count=1;?>
                                                          @foreach($Services as $Service)

                                <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$Service->created_at}}</td>
                                                        <td>{{$Service->name}}</td>
                                                        <td>{{$Service->desc}}</td>

                                                        <td>

                                                             <img src="{{asset('uploads/'.$Service->cover)}}" style="width:50%;">
                                                        </td>


                                                        <td>

                                                             <img src="{{asset('uploads/'.$Service->wrapper)}}" style="width:50%;">
                                                        </td>

                                                      
                                                        
                                                        <td>
                                                             
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.service.delete',['id'=>$Service->id])}}">Delete</a>
                                                        </td>
                                </tr>

                                <?php
                                    $count++;
                                ?>

                                @endforeach


                                 

                                
                                
                          
                                </tbody>
                            </table>

                            <!--data table-->

                           
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection