@extends('layouts.landing-page')

@section('content')
       
       <!--=========body========-->





                <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/services.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                            <div class="neer_section_data">
                                                    <h2>Our Clients</h2>
                                                                                                                        
                                                    </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Clients                 </div>
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






















<!--content-->



















<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60ae6936da vc_custom_1506533564810 vc_row-has-fill" style="text-align: left;">

    





<?php $columbs=3; $client_id=0;?>

<?php for($i=1; $i <=3; $i++){ ?>



<div class="wpb_column vc_column_container vc_col-sm-4">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">  


                <?php $limit =1;?>

                <?php 

                        

                        $factor=floor($clientNo/3);

                        $remainder=$clientNo%3;

                        if($i==1){
                            $limitValue=$factor+$remainder;
                        }else{

                            $limitValue=$factor;
                        }


                ?>

                   @foreach($Clients as $Client)

                   <?php if($Client->id <= $client_id){continue;} ?>

                   <?php if($limit>$limitValue){break;} ?>

                    <div class="neer_testimonial_grid neer_testimonial_dark_theme">
                                    <div class="neer_testimonial_grid_thumb">
                        <img src="{{asset('uploads/clients/'.$Client->cover)}}" alt="Testimonial Thumb" class="img-responsive">
                    </div>
                
                <div class="neer_testimonial_grid_content_column">
                        

                        <div class="neer_testimonial_grid_author_content">
                            <h2>{{$Client->name}}</h2>
                        </div>
                </div>
            </div>


            <?php $client_id=$Client->id; ?>

            <?php $limit++; ?>

            @endforeach

    

                    
                   






    

            </div>
        </div>
    </div>


    <?php } ?>

























<!--<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">

        <div class="vc_column-inner ">
            <div class="wpb_wrapper">


    </div>
</div>
</div>-->




<!--<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">
    <div class="vc_column-inner ">
        <div class="wpb_wrapper">

    
    </div>
</div>
</div>-->






<!--<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-offset-0 vc_col-md-4 vc_col-sm-offset-3">

        <div class="vc_column-inner ">
        <div class="wpb_wrapper">


    </div>
</div>
</div>-->









</div>















<!--content-->































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