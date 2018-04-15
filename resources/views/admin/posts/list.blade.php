
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
                                    <li class="breadcrumb-item"><a href="#">Posts</a></li>
                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Achived posts &nbsp; <label class="badge">{{count($Posts)}}</label></h3>

                            <br>


                            <!--data table-->

                             <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                   <th>S/N</th>
                                   <th>Date</th>
                                   
                                    <th>Category</th>

                                    <th>Title</th>
                                    <th>Comments</th>
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

                                                            @if($Post->allow_comment == 1)
                                                            <a class="btn btn-sm btn-danger" href="{{route('admin.post.comment.block',['id'=>$Post->id])}}">Block comment</a>
                                                            @else

                                                            <a class="btn btn-sm btn-primary" href="{{route('admin.post.comment.unblock',['id'=>$Post->id])}}">Unblock comment</a>
                                                             @endif
                                                              <a class="btn btn-sm btn-danger" href="{{route('admin.post.delete',['id'=>$Post->id])}}">Delete</a>
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
                                {{$Posts->links()}}
                            </center>
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->

@endsection