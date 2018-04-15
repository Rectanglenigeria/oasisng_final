@extends('layouts.landing-page1')

@section('content')
      







         <!-- START CTA -->
        <section class="section" id="hire" style="background-color: black; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <br><br>
                            <h1 class="text-white" style="text-transform: uppercase;">Fill the form below to submit your task</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CTA -->


        <!-- START SERVICES -->


        
        <section class="section bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto lan_sec-title">
                            <div class="bus_lan_titbor">
                                <i class="mdi mdi-vector-combine"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div class="lan_box_ser mt-3 text-center">
                           
                             @if(Session::has('notification'))
                             <br>
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif

                            <div class="service-content mt-4" style="text-align: justify;">

                                <form action="{{route('request.create.submit')}}" method="POST" role="form">

                                    {{ csrf_field() }}


                                    <legend>Profile</legend>

                                    <div class="form-body">

                                   <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                                    <label>Firstname</label>
                                                    <input type="text" class="form-control"   value="{{old('firstname')}}" name="firstname" id="firstname">

                                                    @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                    <label>Lastname</label>
                                                    <input type="text" class="form-control"  value="{{old('lastname')}}" name="lastname" id="lastname">

                                                    @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif

                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control"  value="{{old('email')}}" name="email" id="email">

                                                       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                                    <label>Nationality</label>
                                                    <input type="text" class="form-control"  value="{{old('country')}}" name="country" id="country">

                                                     @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control"  value="{{old('phone')}}" name="phone" id="phone">
                                                     @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>



                                        
                                         <hr>
                                        <legend>
                                            Task Details
                                        </legend>



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
                                                    <label>Service</label>





                                                    <select id="service" class="form-control" name="service" >



                                    <option disabled="disabled" selected="selected">Select service</option>

                                    @foreach($Services as $Service)

                                    <option value="{{$Service->id}}">{{$Service->name}}</option>

                                    @endforeach
                                    
                                </select>



                                                    




                                                     @if ($errors->has('service'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('service') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('completed_at') ? ' has-error' : '' }}">
                                                    <label>Duration</label>
                                                    <input class="form-control"  value="{{old('completed_at')}}" name="completed_at" id="completed_at" type="text">
                                                    @if ($errors->has('completed_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('completed_at') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('victim_info') ? ' has-error' : '' }}">
                                                    <label>Victim's Info</label>

                                                    <textarea class="form-control" name="victim_info" id="victim_info">
                                                        {{old('victim_info')}}
                                                    </textarea>
                                                    @if ($errors->has('victim_info'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('victim_info') }}</strong>
                                    </span>
                                @endif
                                                    
                                                </div>

                                            </div>
                                        </div>



                                         <hr>
                                        <legend>
                                            Payment Details
                                        </legend>
                                       


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                                    <label>Price range ($)</label>
                                                    <input class="form-control" name="price" value="{{old('price')}}" id="price" type="number">

                                                    @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h3>
                                                        Payment method
                                                    </h3>

                                                    <select id="service" class="form-control" name="service" >

                                                <?php $count=1;?>
                                                @foreach($Payments as $Payment)

                                    <option value="{{$Payment->value}}" <?php if($count==1){echo 'selected="selected"';}?>>{{$Payment->name}}
                                    </option>

                                                        <?php $count++; ?>

                                                @endforeach

                                                </select>



                                                    
                                                </div>

                                                

                                            </div>
                                        </div>




                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('is_payment_ready') ? ' has-error' : '' }}">
                                                    <label>Is payment ready?</label>


                                <select id="is_payment_ready" class="form-control" name="is_payment_ready" required >
                                  
                                    <option value="yes" selected="selected">Yes</option>
                                    <option value="no">N0</option>
                                    
                                </select>


                                                    
                                                    @if ($errors->has('is_payment_ready'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('is_payment_ready') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>

                                        <hr>
                                        
                                         <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                    </div>
                                </form>

                                
                            </div>

                        </div>
                    </div>


                    
                    
                </div>








            </div>
        </section>
        <!-- END SERVICES -->




@endsection
