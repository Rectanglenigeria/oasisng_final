@extends('layouts.landing-page')

@section('content')
       
        <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/services.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                            <div class="neer_section_data">
                                                    <h2>Our Services</h2>
                                                                                                                        
                                                    </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Services                        </div>
                    </div>
                </div>
                    </div>
    


















    
    <div class="neer-single-page-wrap clearfix">
        <div class="container neer-all-sections">
            <div class="neer-single-page-wrapper clearfix">
                <p> <style type="text/css">
    .neer-background-overlay-5ac60ae6936da{
        position: relative;
        background-position: left center !important;
    }
        
    </style>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60ae6936da vc_custom_1506533564810 vc_row-has-fill" style="text-align: left;">





<?php $columbs=3; $service_id=0;?>

<?php for($i=1; $i <=3; $i++){ ?>


    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">

        <div class="vc_column-inner ">

            <div class="wpb_wrapper">




                <?php $limit =1;?>

                   @foreach($Services as $Service)

                   <?php if($Service->id <= $service_id){continue;} ?>

                   <?php if($limit>2){break;} ?>


    <div class="neer_main_service_section-style-two-three-similar neer_main_service_section-style-three">

        
                    <div class="neer-service-style-two-three-similar" style="">
                               
                                <figure style="">
                        
                                                    <img src="{{asset('uploads/'.$Service->cover)}}" alt="Service Thumbnail" class="img-responsive">
                        
                                                    <div class="neer-service-secendary-icon">
                                <i class="fa fa-angle-right"></i>
                            </div>
                                                <figcaption>
                            <header>
                                                                    <div class="neer-service-icon-thumb">
                                         <i style="color: white;" class="{{$Service->icon}}" style="font-size:200px;"></i>
                                    </div>
                                
                                <div class="neer-service-heading">
                                    <h2>{{$Service->name}}</h2>
                                </div>

                                                            </header>

                                                            <footer>
                                    <p style="color:white;">

                                        {{substr($Service->desc,0,127)}}... <a style="color: white;tex" href="{{route('service.view',['id'=>$Service->id])}}">more</a>

                                </p>
                                </footer>
                                                        
                        </figcaption>
                    
                </figure>
                               
                            </div>
            </div>


            <div class="vc_empty_space"   style="height: 30px" ><span class="vc_empty_space_inner"></span></div>

            <?php $service_id=$Service->id; ?>

            <?php $limit++; ?>

            @endforeach







    

   





    </div>
</div>
</div>


<?php } ?>













    </div>
    <div class="vc_row-full-width vc_clearfix"></div>  
     <style type="text/css">
    .neer-background-overlay-5ac60ae6970f2{
        position: relative;
        background-position: right top !important;
    }
        
    </style>








    <div class="vc_row-full-width vc_clearfix"></div>
    <br>
    <br>
            
         </div>
        </div>
        </div>






@endsection