@extends('layouts.admin')

@section('content')


 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Site Configurations</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Finesshack</a></li>
                                    <li class="breadcrumb-item"><a href="#">Add Payment Method</a></li>


                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">

                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Add new payment mathod</h3>
                            <br>


                           
                           <!--news-->

                        <div class="row">

                            <!--news card-->

                            <div class="col-md-12">

                                <form class="form-horizontal" method="POST" action="{{route('admin.paymentmethod.create.submit')}}">

                                     {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" class="form-control" value="{{old('name')}}" name="name" id="name" type="text">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                        <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                            <label for="value" class="col-md-4 control-label">Value</label>

                            <div class="col-md-12">
                                <input id="value" class="form-control" value="{{old('value')}}" name="value" id="value" type="text">

                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add method
                                </button>

                                
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





@endsection
