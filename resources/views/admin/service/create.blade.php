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
                            <h3 class="text-dark header-title m-t-0">Add new service</h3>
                            <br>


                           
                           <!--news-->

                        <div class="row">

                            <!--news card-->

                            <div class="col-md-12">

                                <form class="form-horizontal" method="POST" action="{{route('admin.service.create.submit')}}" enctype="multipart/form-data">

                                     {{ csrf_field() }}

                                     <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                            <label for="icon" class="col-md-4 control-label">Service icon</label>

                            <div class="col-md-12">
                                <input id="icon" class="form-control" value="{{old('icon')}}" name="icon" id="icon" type="text">

                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Service name</label>

                            <div class="col-md-12">
                                <input id="name" class="form-control" value="{{old('name')}}" name="name" id="name" type="text">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                                                <div class="form-group{ $errors->has('file') ? ' has-error' : '' }}">
                                                    <label>Cover</label>
                                                    <input class="form-control"  name="file" id="file" value="{{old('file')}}" type="file">

                                                       @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                                                </div>




                                                  <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{ $errors->has('file2') ? ' has-error' : '' }}">
                                                    <label>Wrapper</label>
                                                    <input class="form-control"  name="file2" id="file2" value="{{old('file2')}}" type="file">

                                                       @if ($errors->has('file2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file2') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                    </div>





                         <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Description</label>

                            <div class="col-md-12">

                                <textarea id="desc" class="form-control" name="desc">
                                    {{old('desc')}}
                                </textarea>
                                

                                @if ($errors->has('desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                @endif

                          </div>
                        </div>


                       

                        

                        


                      

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    add service
                                </button>

                                
                            </div>
                        </div>


                         <div class="alert alert-success alert-sm alert-dismissable">

                            <label>Service icons</label>

                            <span>"fas fa-mobile-alt" - For phone</span><br>
                            <span>"fab fa-facebook" - For facebook</span><br>
                            <span>"fab fa-twitter" - For twitter</span><br>
                            <span>"fab fa-snapchat" - For snapchat</span><br>

                             <span>"fab fa-linkedin" - For linkedin</span><br>

                              <span>visit <a href="https://fontawesome.com/icons?d=gallery">here</a> for more</span><br>

                             

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
