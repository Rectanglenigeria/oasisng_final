@extends('layouts.landing-page')

@section('content')
       
       <!--=========body========-->



                <div class="neer-inner-header-section " style="background-image:url({{asset('uploads/'.$Service->wrapper)}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                <div class="neer_section_data">
                                                                                                <h2>{{$Service->name}}</h2>
                                                                                                                </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Services                       </div>
                    </div>
                </div>
                    </div>
    

    
    <div class="neer-single-page-wrap clearfix">
        <div class="container neer-all-sections">
            <div class="neer-single-page-wrapper clearfix">
                <p> <style type="text/css">
    .neer-background-overlay-5ac60af66fb17{
        position: relative;
        background-position: right top !important;
    }
        
    </style>








<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60af66fb17 vc_default vc_row-o-content-bottom vc_row-flex" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space  hidden-blank-space"   style="height: 80px" ><span class="vc_empty_space_inner"></span></div>

    <div class="wpb_text_column wpb_content_element " style="text-align: left;">
        <div class="wpb_wrapper">
            <h2>{{$Service->name}}</h2>
<p>&nbsp;</p>

<p>{{$Service->desc}}</p>


        </div>
    </div>
<div class="vc_empty_space"   style="height: 50px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div>


</div>














<div class="vc_row-full-width vc_clearfix"></div>   <style type="text/css">
    .neer-background-overlay-5ac60af676878{
        position: relative;
        background-position: right top !important;
    }
        
    </style>

           





<!--=========body========-->















    </div>
    </div>
    </div>



@endsection