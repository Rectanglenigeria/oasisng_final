@extends('layouts.landing-page2')

@section('content')
       
       <!--=========body========-->










                <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/2017/09/welcome-section-bg2.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                   
                                                <div class="neer_section_data">
                                                                                                <h2>Contact</h2>
                                                                                                                </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Contact                     </div>
                    </div>
                </div>
                    </div>
    

    
    <div class="neer-single-page-wrap clearfix">
        <div class="container neer-all-sections">
            <div class="neer-single-page-wrapper clearfix">
                <p> <style type="text/css">
    .neer-background-overlay-5ac60b2685ebb{
        position: relative;
        background-position: right top !important;
    }
        
    </style>
<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60b2685ebb vc_custom_1505223687567 vc_default" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4"><div class="vc_column-inner vc_custom_1507968143011"><div class="wpb_wrapper"> <br><br><br>         <div class="neer_info_lists clearfix">
            <ul>
                                    <li>
                                                    <div class="neer_info_list_icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                                                <div class="neer_info_list_data">
                            <h6>Lagos Office</h6>
                            <p>167/173 Igbosere Road (Second Floor),Opposite Court of Appeal, Lagos Island, Lagos. Nigeria</p>
                        </div>
                        
                    </li>
                                    <li>
                                                    <div class="neer_info_list_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                                                <div class="neer_info_list_data">
                            <h6>Phone Number</h6>
                            <p>234-8129917819, 234-8086661049</p>
                        </div>
                        
                    </li>
                                    <li>
                                                    <div class="neer_info_list_icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                                                <div class="neer_info_list_data">
                            <h6>Email address</h6>
                            <p>info@oasisng.com, osita.eze@oasisng.com, oasisng@yahoo.co.uk</p>
                        </div>
                        
                    </li>
                            </ul>
        </div>
    
            <div class="neer-social-icon-list">
            <ul>
                                    <li>
                                                <a href="facebook.com/oasisng" target="_blank">
                                                                                    <i class="fab fa-facebook"></i>
                                                                                </a>
                                            </li>
                                    <li>
                                                <a href="twitter.com/oasisng" target="_blank">
                                                                                    <i class="fab fa-twitter"></i>
                                                                                </a>
                                            </li>
                                    <li>
                                                <a href="linkedin.com/oasisng" target="_blank">
                                                                                    <i class="fab fa-linkedin"></i>
                                                                                </a>
                                            </li>
                                   
                            </ul>
        </div>
        </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-8 vc_col-has-fill"><div class="vc_column-inner vc_custom_1507968163816"><div class="wpb_wrapper">  <br>          <div class="neer_heading_title neer_heading_title_5ac60b2686aa8">
                            <span style="color: #333333;">Get in a Touch</span>
            
            <h2 style="font-size: 22px;color: #333333;">Send message</h2>
        </div>
                <style>
            .neer_heading_title_5ac60b2686aa8 h2:after{
                content: "";
                height: 1px;
                width: 84px;
                display: block;
                margin-top: 10px;
            }
        </style>
    
                        <div class="neer_main_contact_form">
                <div role="form" class="wpcf7" id="wpcf7-f1938-p2599-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>


 @if(Session::has('notification'))
                             
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif


<form action="{{route('contact.create.submit')}}" method="post" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">

    {{ csrf_field() }}


<div class="neer-banner-contact-form">


<div class="neer-single-banner-form{{ $errors->has('name') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
        <input type="text" name="name" value="{{old('name')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name" />
    </span>

    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</div>





<div class="neer-single-banner-form{{ $errors->has('email') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">
        <input type="email" name="email" value="{{old('email')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email.." />
    </span>

    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>









<div class="neer-single-banner-form{{ $errors->has('body') ? ' has-error' : '' }}">
    
    <span class="wpcf7-form-control-wrap text-793">
        <textarea name="body" size="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="" autofocus>
            {{old('body')}}
        </textarea>
    </span>

     @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
</div>





<div class="neer-single-banner-form">
    <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
</div>






</div>
<div class="wpcf7-response-output wpcf7-display-none">
    
</div>

</form>










</div>           

</div>



            </div></div></div></div>    <style type="text/css">
    .neer-background-overlay-5ac60b2687ca7{
        position: relative;
        background-position: right top !important;
    }
        
    </style>
<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60b2687ca7 vc_default" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 100px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div></div>
            </div>
                    </div>
    </div>












@endsection