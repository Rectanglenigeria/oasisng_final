@extends('layouts.landing-page')

@section('content')
       
    
    <div class="container neer-all-sections">
        <p> <style type="text/css">
    .neer-background-overlay-5ac60a34021a5{
        position: relative;
        background-position: right top !important;
    }
        
    </style>






<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a34021a5 vc_row-no-padding" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <div class="neer-slider-main-section neer-slider-main-section-style-one">
        <div class="neer-awesome-preloader-container">
            <div class="neer-awesome-loader-07"></div>
        </div>







                        <div class="neer_slider neer_slider_5ac60a3403148 owl-carousel">









    



    <div class="neer_slider_single" style="background-image:url({{asset('uploads/haulage.jpg')}}); text-align: left; ">
        <div class="container">
            <header>
                <div class="neer-slider-heading" style="font-size: 60px;color: #ffffff;">
                    Haulage, Marketting and Consultancy Services</div>
                <!--<div class="neer-slider-caption" style="font-size: 16px;color: #ffffff;">
                    Feel The <span style="color:#ffc13c">difference</span> With Us</div>-->

               
            </header>




        </div>
    </div>



    <div class="neer_slider_single" style="background-image:url({{asset('uploads/pipe_wrapper.jpg')}}); text-align: left; ">
        <div class="container">
            <header>
                <div class="neer-slider-heading" style="font-size: 60px;color: #ffffff;">
                    Pipe line Maintenance and Protection Services </div>
                <!--<div class="neer-slider-caption" style="font-size: 16px;color: #ffffff;">
                    Feel The <span style="color:#ffc13c">difference</span> With Us</div>-->

                
            </header>




        </div>
    </div>



   <div class="neer_slider_single" style="background-image:url({{asset('uploads/procurement_wrapper.jpg')}}); text-align: left; ">
        <div class="container">
            <header>
                <div class="neer-slider-heading" style="font-size: 60px;color: #ffffff;">
                    Procurement and Equipment supply</div>
                <!--<div class="neer-slider-caption" style="font-size: 16px;color: #ffffff;">
                    Feel The <span style="color:#ffc13c">difference</span> With Us</div>-->

               
            </header>




        </div>
    </div>




</div>
        
                    



                    <div class="neer-slider-navigation" style="">
    <div class="container">
        <div class="neer-slider-navigation-list owl-carousel">

            <div class="neer_promo neer_promo_style_one neer_promo_theme_lite single-slider-navigation" style="text-align: left;">

                <div class="neer-promo-thumnb">
                    <i class="fas fa-truck-moving" style="color: red; font-size: 150%;"></i>
                </div>
                <!-- ./End Slider Navigation Icon -->
                <div class="neer-promo-data">
                    <h2>Haulage, Marketting and Consultancy Services</h2>
                    <!--<p>Build Your Dream Home Into Reality</p>-->
                </div>
            </div>


           

            <div class="neer_promo neer_promo_style_one neer_promo_theme_lite single-slider-navigation" style="text-align: left;">

                <div class="neer-promo-thumnb">
                   <i class="fas fa-arrow-right" style="color: red; font-size: 150%;"></i>
                </div>
                <!-- ./End Slider Navigation Icon -->
                <div class="neer-promo-data">
                    <h2>Pipeline Maintenance and Protection Services</h2>
                    <!--<p>Build Your Dream Home Into Reality</p>-->
                </div>
            </div>



             <div class="neer_promo neer_promo_style_one neer_promo_theme_lite single-slider-navigation" style="text-align: left;">

                <div class="neer-promo-thumnb">
                    <i class="fas fa-shopping-cart" style="color: red; font-size: 150%;"></i>
                </div>
                <!-- ./End Slider Navigation Icon -->
                <div class="neer-promo-data">
                    <h2>Procurement and Supply Services</h2>
                    <!--<p>Build Your Dream Home Into Reality</p>-->
                </div>
            </div>



        </div>
    </div>

</div>
<!-- ./End Neer Slider Navigation -->


                

    </div>





            <script type="text/javascript">
                //<![CDATA[
                (function(){
                    function neer_slider_init(){
                        jQuery(".neer_slider").each(function(){

                              var sync1 = jQuery(this);
                              var sync2 = jQuery(this).next('.neer-slider-navigation').find('.neer-slider-navigation-list');
                              var slidesPerPage = 3; //globaly define number of elements per page
                              var syncedSecondary = true;

                              sync1.owlCarousel({
                                items : 1,
                                slideSpeed : 30,
                                autoplayTimeout: 5000,
                                nav: true,
                                autoplay: true,
                                dots: true,
                                loop: 1,
                                responsiveRefreshRate : 200,
                                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                                animateOut: 'fadeOut',
                                animateIn: 'fadeIn',
                                autoplayHoverPause: true
                              }).on('changed.owl.carousel', syncPosition);

                              sync2
                                .on('initialized.owl.carousel', function () {
                                  sync2.find(".owl-item").eq(0).addClass("current");
                                })
                                .owlCarousel({
                                items : slidesPerPage,
                                dots: true,
                                margin: 10,
                                // nav: true,
                                // autoplayHoverPause: true,
                                // center: true,
                                slideSpeed : 20,
                                autoplayTimeout: 30,
                                autoplay: false,
                                smartSpeed: 200,
                                slideSpeed : 500,
                                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                                responsiveRefreshRate : 100
                              }).on('changed.owl.carousel', syncPosition2);

                              function syncPosition(el) {
                                //if you set loop to false, you have to restore this next line
                                //var current = el.item.index;
                                
                                //if you disable loop you have to comment this block
                                var count = el.item.count-1;
                                var current = Math.round(el.item.index - (el.item.count/2) - .5);
                                
                                if(current < 0) {
                                  current = count;
                                }
                                if(current > count) {
                                  current = 0;
                                }
                                
                                //end block

                                sync2
                                  .find(".owl-item")
                                  .removeClass("current")
                                  .eq(current)
                                  .addClass("current");
                                var onscreen = sync2.find('.owl-item.active').length - 1;
                                var start = sync2.find('.owl-item.active').first().index();
                                var end = sync2.find('.owl-item.active').last().index();
                                
                                if (current > end) {
                                  sync2.data('owl.carousel').to(current, 100, true);
                                }
                                if (current < start) {
                                  sync2.data('owl.carousel').to(current - onscreen, 100, true);
                                }
                              }
                              
                              function syncPosition2(el) {
                                if(syncedSecondary) {
                                  var number = el.item.index;
                                  sync1.data('owl.carousel').to(number, 100, true);
                                }
                              }
                              
                              sync2.on("click", ".owl-item", function(e){
                                e.preventDefault();
                                var number = jQuery(this).index();
                                sync1.data('owl.carousel').to(number, 300, true);
                              });




                        });
                    }

                    if(jQuery('body').hasClass('vc_editor')){
                        jQuery(document).ready(function(){
                            neer_slider_init();
                        });
                    } else{
                        jQuery(window).on('load',function(){
                            neer_slider_init();
                        });
                    }
                    
                }());
                //]]&gt;
            </script>

        

    </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>   <style type="text/css">
    .neer-background-overlay-5ac60a3407721{
        position: relative;
        background-position: right top !important;
    }
        
    </style>



<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a3407721 vc_default" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        <div class="neer_section_header neer_section_header_dark">
                            <div class="neer_section_thumnb">
                                <i class="fas fa-users" style="color: red; font-size: 150%;"></i>
                   </div>
                        <div class="neer_section_data">
                                    <h2>About Us</h2>
                            </div>
        </div>
      </div></div></div></div>  <style type="text/css">
    .neer-background-overlay-5ac60a340838c{
        position: relative;
        background-position: right top !important;
    }
        
    </style>





<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a340838c vc_default vc_row-o-content-bottom vc_row-flex" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space  hidden-blank-space"   style="height: 80px" ><span class="vc_empty_space_inner"></span></div>

    <div class="wpb_text_column wpb_content_element " style="text-align: left;">
        <div class="wpb_wrapper">
            <h2>{{$About->title}} <!--<span style="color:#f2b739;">Excellence</span>--></h2>
<p>Since 2008</p>
<p>&nbsp;</p>
<p>
   
    {!!html_entity_decode($About->value_short)!!}


</p>
<p><a href="{{route('about')}}" class="btn btn-default">More</a></p>

        </div>
    </div>
<div class="vc_empty_space"   style="height: 50px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 vc_hidden-xs"><div class="vc_column-inner vc_custom_1507027088027"><div class="wpb_wrapper">
    <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1505629936500">
        
        <figure class="wpb_wrapper vc_figure">
            <div class="vc_single_image-wrapper   vc_box_border_grey">
                <img width="815" height="603" src="{{asset('wp-content/uploads/about.jpg')}}" class="vc_single_image-img attachment-full" alt="" srcset="{{asset('wp-content/uploads/about.jpg')}}" sizes="(max-width: 815px) 100vw, 815px" /></div>
        </figure>
    </div>
</div></div></div></div>    

<style type="text/css">
    .neer-background-overlay-5ac60a340a45a{
        position: relative;
        background-position: right top !important;
    }
                .neer-background-overlay-5ac60a340a45a:after {
            content: "";
            display: table !important;
            background-image: url({{asset('wp-content/themes/neer/images/bottom-image-border.jpg')}});
            background-repeat: repeat-x;
            height: 10px;
            /*position: absolute;*/
            left: 0;
            bottom: 0;
            width: 100%;
            clear: both;
            
                            margin-left: calc((-100vw + 100%) / 2);
                margin-right: calc((-100vw + 100%) / 2);
                padding-left: calc((100vw - 100%) / 2);
                padding-right: calc((100vw - 100%) / 2);
                width: 100vw;
                
                    }
    
    </style>









<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a340a45a vc_custom_1516428778163 vc_row-has-fill" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_col-md-6 vc_col-xs-12"><div class="vc_column-inner "><div class="wpb_wrapper">     <div class="neer_funbox_header">
            <h2 style="color: #ffffff">Leading The Way in oil & gas services and construction</h2>
        </div>
    </div></div></div><div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-6 vc_col-md-6 vc_col-xs-12"><div class="vc_column-inner "><div class="wpb_wrapper">      <div class="neer_funboxs clearfix">
            <div class="neer-funbox-list">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="neer-single-funbox">
                            <div class="neer-icon-funbox">
                                <i class="fa fa-user" style="color: red;"></i>
                            </div> <!-- ./End Neer Icon Funbox -->

                            <div class="neer-funbox-data">
                                <h3 style="color:#ffffff;">200</h3>
                                <p style="color:#ffffff;">Clients</p>
                            </div>
                        </div>
                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="neer-single-funbox">
                            <div class="neer-icon-funbox">
                                <i class="fas fa-handshake" style="color: red;"></i>
                            </div> <!-- ./End Neer Icon Funbox -->

                            <div class="neer-funbox-data">
                                <h3 style="color:#ffffff;">1 K</h3>
                                <p style="color:#ffffff;">Contracts</p>
                            </div>
                        </div>
                    </div>
                                    
                            </div>
        </div>
    </div></div></div></div>







    <div class="vc_row-full-width vc_clearfix"></div>   <style type="text/css">
    .neer-background-overlay-5ac60a340af6d{
        position: relative;
        background-position: left center !important;
    }
        
    </style>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a340af6d vc_custom_1516428916911 vc_row-has-fill" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">     <div class="neer_section_header neer_section_header_dark">
                            <div class="neer_section_thumnb">
                      <i class="fas fa-arrow-circle-down" style="color: red; font-size: 150%;"></i>
                </div>
                        <div class="neer_section_data">
                                    <h2>Our Sevices</h2>
                            </div>
        </div>



      <div class="vc_row wpb_row vc_inner vc_row-fluid">






<!--service columb-->

<?php $columbs=3; $service_id=0;?>

<?php for($i=1; $i <=3; $i++){ ?>

        <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">

                    <?php $limit =1;?>

                   @foreach($Services as $Service)

                   <?php if($Service->id <= $service_id){continue;} ?>

                   <?php if($limit>2){break;} ?>
            <!--card 1-->
                <div class="neer_main_service_section">
        
                    <div class="neer_service">
                                    <div class="neer_service_thumb">
                                        <br>
                                        <i class="{{$Service->icon}}" style="font-size:150%;"></i>
                        <!--<img src="{{asset('wp-content/uploads/2017/09/service-1.png')}}" alt="Service Thumb" class="img-responsive">-->
                    </div>
                
                <div class="neer_service_content">
                    <h2>{{$Service->name}}</h2>
                    <p>{{substr($Service->desc,0,127)}}...</p>
                </div>
            </div>

                
                <div class="neer_button neer_service_button_sp" style="text-align: center;">
                    <a href="{{route('service.view',['id'=>$Service->id])}}"  title=""    rel=""  style="color: #ffffff;background-color: #202e31;border-radius: 5px;padding: 10px 30px;font-size:14px;;  " class="neer_button-5ac60a340c2dc">Read More</a>
                </div>

                <style>
                    .neer_button-5ac60a340c2dc{
                        transition: all .4s;
                    }

                    .neer_button-5ac60a340c2dc:hover{

                        
                        -webkit-box-shadow: 0 11px 21px rgba(32, 46, 49,.15);
                        -moz-box-shadow: 0 11px 21px rgba(32, 46, 49,.15);
                        box-shadow: 0 11px 21px rgba(32, 46, 49,.15);
                    }

                </style>
                        </div>


                    <!--card 1-->



                    <?php $service_id=$Service->id; ?>

                    <?php $limit++; ?>

                    @endforeach



    </div>
</div>
</div>

<?php } ?>
<!--service columb-->






    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="vc_row-full-width vc_clearfix">
        
    </div>   
    <style type="text/css">
    .neer-background-overlay-5ac60a340de89{
        position: relative;
        background-position: right top !important;
    }
        
    </style>







<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a3413940 vc_custom_1506332579784 vc_row-has-fill" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">     <div class="neer_section_header neer_section_header_dark">
                            <div class="neer_section_thumnb">
                   <i class="fas fa-arrow-circle-down" style="color: red; font-size: 150%;"></i>
                </div>
                        <div class="neer_section_data">
                                    <h2>Our team</h2>
                
                                    <p>We have a dedicated team</p>
                            </div>
        </div>


      <div class="vc_row wpb_row vc_inner vc_row-fluid">




        @foreach($Team as $Staff)


        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-12">
            <div class="vc_column-inner ">

                <div class="wpb_wrapper">        

                    <div class="neer_teams ">

            <div class="neer-team-list">

                <figure>

                                            <img src="{{asset('uploads/team/'.$Staff->cover)}}" alt="Team Thumb" class="img-responsive">
                    
                    <figcaption>
                        <header>
                            <h2>{{$Staff->name}}</h2>
                            <h3>{{$Staff->role}}</h3>
                        </header>
                        
                                                    <div class="neer-team-data">
                                <p></p>
                            </div>
                                                
                                                    <footer>
                                <div class="neer-team-social-bookmarks">
                                    <ul>
                                                                            
                                            <li><a href="{{$Staff->fb_link}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                                                            
                                            <li><a href="{{$Staff->ln_link}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                                                            </ul>
                                </div>
                            </footer>
                                            </figcaption>
                </figure>

            </div>
        </div>
    </div>

</div>
</div>

@endforeach














    </div>
    </div>
    </div>
    </div>
    </div>

    <div class="vc_row-full-width vc_clearfix"></div>   
    <style type="text/css">
    .neer-background-overlay-5ac60a3415f37{
        position: relative;
        background-position: right top !important;
    }
        
    </style>
<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a3415f37 vc_custom_1505629774427 vc_row-has-fill" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">     <div class="neer_section_header neer_section_header_lite">
                            <div class="neer_section_thumnb">
                   <i class="fas fa-arrow-circle-down" style="color: red; font-size: 150%;"></i></div>
                        <div class="neer_section_data">
                                    <h2>Testimony</h2>
                            </div>
        </div>
            
        
            <div class="neer_testimonial_carousels neer_testimonial_lite_theme">
                <div class="neer-testimonial_carousel-list">

                    <div class="neer_testimonial_carousel_slider owl-carousel">


                                @foreach($Testimonies as $Testimony)
                        
                                <div class="neer-single-testimonial_carousel">

                                    <div class="neer-testimonial_carousel_content">
                                        <p>{{$Testimony->body}}</p>
                                    </div>

                                    <div class="neer-testimonial_carousel_author_content">
                                        <h2>{{$Testimony->name}}</h2>
                                        <p>{{$Testimony->city}}</p>
                                    </div>

                                </div>
                                @endforeach

                        
                               

                         </div>
                </div>
            </div>

            <script type="text/javascript">
                //<![CDATA[
                (function(){

                    jQuery(document).ready(function(){

                        jQuery(".neer_testimonial_carousel_slider").each(function(){

                              var sync1 = jQuery(this);
                              var sync2 = jQuery(this).prev('.neer_testimonial_carousel_nav');
                              var slidesPerPage = 7; //globaly define number of elements per page
                              var syncedSecondary = true;

                              sync1.owlCarousel({
                                items : 1,
                                slideSpeed : 2000,
                                autoplayTimeout: 3000,
                                nav: false,
                                autoplay: false,
                                dots: false,
                                loop: true,
                                responsiveRefreshRate : 200,
                                navElement: 'div class="neer_customNavigation"',
                                navText: ['<a class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>','<a class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>'],

                                autoplayHoverPause: true
                              }).on('changed.owl.carousel', syncPosition);

                              sync2
                                .on('initialized.owl.carousel', function () {
                                  sync2.find(".owl-item").eq(0).addClass("current");
                                })
                                .owlCarousel({
                                items : slidesPerPage,
                                dots: true,
                                margin: 10,
                                // nav: true,
                                // autoplayHoverPause: true,
                                // center: true,
                                slideSpeed : 2000,
                                autoplayTimeout: 3000,
                                smartSpeed: 200,
                                slideSpeed : 500,
                                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                                responsiveRefreshRate : 100,
                                responsive:{
                                    0:{
                                        items:2,
                                        nav:true
                                    },
                                    600:{
                                        items:4,
                                        nav:false
                                    },
                                    1000:{
                                        items: slidesPerPage
                                    }
                                }
                              }).on('changed.owl.carousel', syncPosition2);

                              function syncPosition(el) {
                                //if you set loop to false, you have to restore this next line
                                //var current = el.item.index;
                                
                                //if you disable loop you have to comment this block
                                var count = el.item.count-1;
                                var current = Math.round(el.item.index - (el.item.count/2) - .5);
                                
                                if(current < 0) {
                                  current = count;
                                }
                                if(current > count) {
                                  current = 0;
                                }
                                
                                //end block

                                sync2
                                  .find(".owl-item")
                                  .removeClass("current")
                                  .eq(current)
                                  .addClass("current");
                                var onscreen = sync2.find('.owl-item.active').length - 1;
                                var start = sync2.find('.owl-item.active').first().index();
                                var end = sync2.find('.owl-item.active').last().index();
                                
                                if (current > end) {
                                  sync2.data('owl.carousel').to(current, 100, true);
                                }
                                if (current < start) {
                                  sync2.data('owl.carousel').to(current - onscreen, 100, true);
                                }
                              }
                              
                              function syncPosition2(el) {
                                if(syncedSecondary) {
                                  var number = el.item.index;
                                  sync1.data('owl.carousel').to(number, 100, true);
                                }
                              }
                              
                              sync2.on("click", ".owl-item", function(e){
                                e.preventDefault();
                                var number = jQuery(this).index();
                                sync1.data('owl.carousel').to(number, 300, true);
                              });




                        });

                    });
                }());
                //]]&gt;
            </script>

            <!--<div class="vc_empty_space"   style="height: 100px" ><span class="vc_empty_space_inner"></span></div>
            
                    <div class="neer_image_carousel neer_image_carousel_5ac60a3417343 owl-carousel">
                                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-1.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-2.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-3.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-4.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-5.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-6.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-7.png" alt="Thumb">
                    </div>
                                    <div class="neer_image_carousel_single">
                        <img src="wp-content/uploads/2017/11/company-logo-8.png" alt="Thumb">
                    </div>
                            </div>-->

            <script type="text/javascript">
                //<![CDATA[
                (function(){
                    jQuery(document).ready(function(){
                        jQuery(".neer_image_carousel_5ac60a3417343").each(function(){
                            var sync1 = jQuery(this);

                              sync1.owlCarousel({
                                items : 6,
                                margin: 20,
                                slideSpeed : 2000,
                                nav: false,
                                autoplay: false,
                                navElement: 'div class="neer_customNavigation"',
                                navText: ['<a class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>','<a class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>'],
                                autoplayTimeout: 3000,
                                dots: false,
                                autoplayHoverPause: false,
                                loop: 1,
                                responsiveRefreshRate : 200,
                                responsive:{
                                    0:{
                                        items:1,
                                    },
                                    600:{
                                        items:3,
                                    },
                                    1000:{
                                        items: 6                                    }
                                }
                              });
                            });  
                    });
                }());
                //]]&gt;
            </script>

        
    </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>   <style type="text/css">
    .neer-background-overlay-5ac60a3418b2a{
        position: relative;
        background-position: right top !important;
    }
                .neer-background-overlay-5ac60a3418b2a:after {
            content: "";
            display: table !important;
            background-image: url({{asset('wp-content/themes/neer/images/bottom-image-border.jpg')}});
            background-repeat: repeat-x;
            height: 10px;
            /*position: absolute;*/
            left: 0;
            bottom: 0;
            width: 100%;
            clear: both;
            
                            margin-left: calc((-100vw + 100%) / 2);
                margin-right: calc((-100vw + 100%) / 2);
                padding-left: calc((100vw - 100%) / 2);
                padding-right: calc((100vw - 100%) / 2);
                width: 100vw;
                
                    }
    
    </style>





<!--blog-->


<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60a341a1c1 vc_default" style="text-align: left;"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">        <div class="neer_section_header neer_section_header_dark">
                            <div class="neer_section_thumnb">
                    <img src="{{asset('wp-content/uploads/2017/09/section-header-icon1.png')}}" alt="Promo Thumb">
                </div>
                        <div class="neer_section_data">
                                    <h2>Our Blog</h2>
                            </div>
        </div>
        <div class="neer-blog-main-section neer-blog-main-section-style-two">
    <div class='neer-blog-container'> 






        @foreach($Posts as $Post)



                    <div class="neer_blog neer_blog_column-3">
                                                                            <figure>
                                
                                                                    <a href=""><img width="470" height="349" src="{{asset('uploads/'.$Post->cover)}}" class="attachment-neer-blog-thumb size-neer-blog-thumb wp-post-image" alt="" /></a>
                                
                                <figcaption>
                                    
                                    <div class="neer_blog_heading">
                                        <a href="buying-new-dream-house/index.html"><h2>{{$Post->title}}</h2></a>
                                    </div>

                                    <div class="neer_blog_meta">
                                        <ul>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>{{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;
                        {{date('h:i',strtotime($Post->created_at))}}</li>
                                        </ul>
                                    </div>

                                                                            <div class="neer_blog_content">
                                            <p>{{$Post->sub_title}}</p>
                                        </div>
                                    
                                    <div class="neer_button" style="text-align: center;">
                                        <a href="{{route('blog.post.view',['id'=>$Post->id])}}" >Read More</a>
                                    </div>
                                </figcaption>
                            </figure>
                                            </div>
            
                            


                                    @endforeach





            








            
                </div></div>
        <script>
            //<![CDATA[
            function ussWindowResize(){
                jQuery(window).trigger('resize');
                window.dispatchEvent(new Event('resize'));
                var evt = window.document.createEvent('UIEvents'); 
                evt.initUIEvent('resize', true, false, window, 0); 
                window.dispatchEvent(evt);
            }

            
            jQuery(window).on('load', function(){
                jQuery(".neer-blog-main-section .neer-blog-container").each(function(){
                        var $container = jQuery(this),

                          colWidth = function () {
                            var w = $container.width(),
                                bagW = jQuery(window).width(), 
                              columnNum = 3,
                              columnWidth = 0;
                            if (bagW > 1200) {
                              columnNum  = 3;
                            } else if (bagW > 1100) {
                              columnNum  = 3;
                            } 
                                                        else if (bagW > 600) {
                              columnNum  = 2;
                            } else if (bagW > 450) {
                              columnNum  = 1;
                            } else if (bagW > 300) {
                              columnNum  = 1;
                            }
                            columnWidth = Math.floor(w/columnNum);
                            $container.find('.neer_blog').each(function() {
                              var $item = jQuery(this),
                                multiplier_w = $item.attr('class').match(/neer_blog-w(\d)/),
                                multiplier_h = $item.attr('class').match(/neer_blog-h(\d)/),
                                width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
                                height = multiplier_h ? columnWidth*multiplier_h[1] : columnWidth;
                              $item.css({
                                width: width,
                                // height: height
                              });
                            });
                            return columnWidth;
                          },
                          isotope = function () {
                            $container.isotope({
                              resizable: false,
                              itemSelector: '.neer_blog',
                              masonry: {
                                columnWidth: colWidth(),
                                gutterWidth: 3
                              }
                            });
                          };

                        isotope();
                        jQuery(window).on('resize', isotope);
                        setTimeout(function(){
                            ussWindowResize();
                        }, 100);

                        $container.closest('.neer-post-grid-main-section').find('.neer-product-category-filtering ul li a, .neer-filter__item').on('click', function(e){
                            e.preventDefault();
                            jQuery('.neer-filter__item, .neer-product-category-filtering ul li a').removeClass('neer-filter__item--selected');

                            $container.isotope({ filter: jQuery(this).attr('data-neer-filter')});
                            jQuery(this).addClass('neer-filter__item--selected');
                        });
                
                });
            });

            jQuery(document).ready(function(){
                jQuery(".neer-blog-main-section .neer-blog-container").each(function(){
                        var $container = jQuery(this),

                          colWidth = function () {
                            var w = $container.width(), 
                                bagW = jQuery(window).width(),
                              columnNum = 3,
                              columnWidth = 0;
                            if (bagW > 1200) {
                              columnNum  = 3;
                            } else if (bagW > 1100) {
                              columnNum  = 3;
                            } 
                                                        else if (bagW > 600) {
                              columnNum  = 2;
                            } else if (bagW > 450) {
                              columnNum  = 1;
                            } else if (bagW > 300) {
                              columnNum  = 1;
                            }
                            columnWidth = Math.floor(w/columnNum);
                            $container.find('.neer_blog').each(function() {
                              var $item = jQuery(this),
                                multiplier_w = $item.attr('class').match(/neer_blog-w(\d)/),
                                multiplier_h = $item.attr('class').match(/neer_blog-h(\d)/),
                                width = multiplier_w ? columnWidth*multiplier_w[1] : columnWidth,
                                height = multiplier_h ? columnWidth*multiplier_h[1] : columnWidth;
                              $item.css({
                                width: width,
                                // height: height
                              });
                            });
                            return columnWidth;
                          },
                          isotope = function () {
                            $container.isotope({
                              resizable: false,
                              itemSelector: '.neer_blog',
                              masonry: {
                                columnWidth: colWidth(),
                                gutterWidth: 3
                              }
                            });
                          };

                        isotope();
                        jQuery(window).on('resize', isotope);
                        setTimeout(function(){
                            ussWindowResize();
                        }, 100);

                        $container.closest('.neer-carousel-default-css').find('.neer-product-category-filtering ul li a, .neer-filter__item').on('click', function(e){
                            e.preventDefault();
                            jQuery('.neer-filter__item, .neer-product-category-filtering ul li a').removeClass('neer-filter__item--selected');

                            $container.isotope({ filter: jQuery(this).attr('data-neer-filter')});
                            jQuery(this).addClass('neer-filter__item--selected');
                        });
                
                });
            });
            //]]&gt;
        </script>
    <div class="vc_empty_space"   style="height: 70px" ><span class="vc_empty_space_inner"></span></div>
</div></div></div></div>
    </div>




    <!--footer-->


@endsection
