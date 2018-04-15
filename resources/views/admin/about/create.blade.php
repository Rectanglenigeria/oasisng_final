
@extends('layouts.admin')

@section('content')


 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Update About</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Oasis</a></li>
                                    <li class="breadcrumb-item"><a href="#">About</a></li>
                                     <li class="breadcrumb-item"><a href="#">Update</a></li>


                                </ol>

                            </div>
                        </div>



                       
                        <div class="row">


                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">{{$About->title}}</h3>
                            <br>

                            <div>
                                  {!!html_entity_decode($About->value_short)!!}
                            </div>

                            <hr>
                            <div>
                                  {!!html_entity_decode($About->value)!!}
                            </div>

                       </div>

                           <!--news-->
                            
                            
                        </div>
                    </div>




                        <div class="row">


                             @if(Session::has('notification'))
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




                    <div class="col-lg-12 col-md-12 col-xl-12">
                        <div class="card-box">
                            <h3 class="text-dark header-title m-t-0">About</h3>
                            <br>


                           


                           <!--news-->

                        <div class="row">

                            <!--news card-->

                            <div class="col-md-12">

                                 <form action="{{route('admin.about.create.submit')}}" method="POST" role="form" enctype="multipart/form-data">

                                         {{ csrf_field() }}
                                    
                                    <div class="form-body">




                                        



               
                                        
                                    <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{ $errors->has('title') ? ' has-error' : '' }}">
                                                    <label>Title</label>
                                                    <input class="form-control"   value="{{old('title')}}" type="text" name="title" id="title">

                                                    @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                    </div>
                                    
                                    <br>

                                     <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{ $errors->has('body_home') ? ' has-error' : '' }}">
                                                    <label>For home page</label>
                                                    <textarea class="form-control"   value="{{old('body_home')}}" type="text" name="body_home" id="body_home">
                                                    </textarea>

                                                    @if ($errors->has('body_home'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body_home') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                    </div>

                                  

                                    <br><br>


                                    <div class="row">

                                         

                                            <div class="col-md-12 ">


                                                <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                                    <label for="body" class="control-label">Body</label>

                           

                                                    <div id="summernote"></div>

                                                    <input id="body" type="hidden" name="body" type="hidden" value="">


                                

                                                    @if ($errors->has('body'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('body') }}</strong>
                                                        </span>
                                                    @endif
                            
                                                 </div>



                                            </div>
                                    </div>


                                    <hr>
                                     <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <button id="create" type="button" class="btn btn-primary btn-sm">Submit</button>
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


                 <script type="text/javascript">
                  window.onload=function(){



                    //initializion script
                    $('#summernote').summernote({

                        placeholder: 'Type your html based message here',
                        tabsize: 2,
                        height: 300
                    });

                    //html form submit script
                    $('#create').click(function(){

                      //sumernote api to get strinf version of the html code
                      var html_form_content = $('#summernote').summernote('code');

                      document.getElementById('body').value=html_form_content;

                   

                      document.getElementById('create').type='submit';

                      var queryObject=document.querySelector("form[name=form]");

                      //submiting sign in form
                      queryObject.submit();


                    });


                  }
                </script>

@endsection