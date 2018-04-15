
@extends('layouts.admin')

@section('content')


 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Add client</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Oasis</a></li>
                                    <li class="breadcrumb-item"><a href="#">Client</a></li>
                                     <li class="breadcrumb-item"><a href="#">Add</a></li>


                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">


                             @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Add client</h3>
                            <br>


                           
                           <!--news-->

                        <div class="row">

                            <!--news card-->

                            <div class="col-md-12">

                                 <form action="{{route('admin.client.create.submit')}}" method="POST" role="form" enctype="multipart/form-data">

                                         {{ csrf_field() }}
                                    
                                    <div class="form-body">




                                        


               
                                        
                                    <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label>Name</label>
                                                    <input class="form-control"   value="{{old('name')}}" type="text" name="name" id="name">

                                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                    </div>


                                  




                                    <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{ $errors->has('file') ? ' has-error' : '' }}">
                                                    <label>Cover</label>
                                                    <input class="form-control"  name="file" id="file" value="{{old('cover')}}" type="file">

                                                       @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                    </div>

                                    <br>


                                    <hr>
                                     <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <button id="create" type="submit" class="btn btn-primary btn-sm">Submit</button>
                                                </div>

                                            </div>
                                    </div>




                                       
                                    </div>
                                </form>

                            </div>
                            <!--news card-->


                           

                           

                          </div>


                         

                               
                           

                       </div>

                           <!--news-->
                            
                            
                        </div>
                    </div>






                   


                </div>




              

                    </div> <!-- container -->

                </div> <!-- content -->


                

@endsection