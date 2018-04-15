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
                                    <li class="breadcrumb-item"><a href="#">Oasis</a></li>
                                    <li class="breadcrumb-item"><a href="#">Testimony</a></li>


                                </ol>

                            </div>
                        </div>



                       




                        <div class="row">


                            @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif

                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">Add new testimony</h3>
                            <br>


                           
                           <!--news-->

                        <div class="row">

                            <!--news card-->

                            <div class="col-md-12">

                                <form class="form-horizontal" method="POST" action="{{route('admin.testimony.create.submit')}}">

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

                         <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Post & Company</label>

                            <div class="col-md-12">
                                <input id="name" class="form-control" value="{{old('city')}}" name="city" id="city" type="text" placeholder="e.g. ceo, shell">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                         <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Body</label>

                            <div class="col-md-12">

                                <textarea id="body" class="form-control" name="body">
                                    {{old('body')}}
                                </textarea>
                                

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                       

                        

                        


                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add testimony
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
