@extends('layouts.landing-page')

@section('content')


 






                <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/2017/09/inner-page-header-bg.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                <div class="neer_section_data">
                                                                                                <h1 style="color: white;">Blog</h1>
                                                                                                                </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Blog</div>
                    </div>
                </div>
                    </div>
    


        <div class="container neer-all-sections neer-page-layout-sidebar-right">
        <div class="row">

            <div class="neer-blog-page-content col-md-9">
                    <style type="text/css">
    .neer-background-overlay-5ac60b1aa7ef0{
        position: relative;
        background-position: right top !important;
    }
        
    </style>

    <br><br><br>
<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60b1aa7ef0 vc_default" style="text-align: left;">

    <div class="wpb_column vc_column_container vc_col-sm-12">

        <div class="vc_column-inner ">

            <div class="wpb_wrapper">   






         <div class="neer-blog-main-section neer-blog-main-section-style-default">

    <div class='neer-blog-container'>     




   @foreach($Posts as $Post)



     <article id="post-358" class="post-358 post type-post status-publish format-standard has-post-thumbnail hentry category-blogging category-passion tag-blog tag-blogging tag-passion">

                    
                    <header class="entry-header">
                        <div class="entry-meta"><span class="screen-reader-text">Posted on</span> <a href="../light-in-the-living-room/index.html" rel="bookmark">

                             

                            <time class="entry-date published">
                                {{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;
                        {{date('h:i',strtotime($Post->created_at))}}
                            </time><!--<time class="updated" datetime="2018-03-14T05:16:16+00:00">March 14, 2018</time>-->
                        </a>
                    </div><!-- .entry-meta -->
                    <h2 class="entry-title">
                            <a href="../light-in-the-living-room/index.html" rel="bookmark"> {{$Post->title}}</a>
                        </h2>                   
                    </header><!-- .entry-header -->

                                            <div class="post-thumbnail">
                           
                                <img width="1140" height="640" src="{{asset('uploads/'.$Post->cover)}}" class="attachment-neer-featured-image size-neer-featured-image wp-post-image" alt="" srcset="{{asset('uploads/'.$Post->cover)}}" sizes="(max-width: 1140px) 100vw, 1140px" />                      
                        </div><!-- .post-thumbnail -->
                    
                    <div class="entry-content">
                        <p>{{$Post->sub_title}}</p>
                        <p> 
                            <a href="{{route('blog.post.view',['id'=>$Post->id])}}" class="more-link">Continue reading</a>
                        </p>
                    </div>

                    <!-- .entry-content -->

                                    </article><!-- #post-## -->



  @endforeach










            </div>

            <div class='neer_blog_pagination'>

                {{$Posts->links()}}

</div>

</div>
</div>
</div>
</div>
</div>
           
            </div>






            
                        <div class="neer-blog-sidebar col-md-3 col-md-push-0 col-sm-6 col-sm-push-3 col-xs-12">
                            <br><br><br>


                            



                <!--<div id="search-2" class="neer-single-sidebar clearfix widget_search">


                   <form role="search" method="get" class="search-form" id="searchform" action="http://wp.pixiefy.com/neer-demo/">
    
    <label class="neer-search-form-label">
        <span class="screen-reader-text">Search for:</span>
        <input type="search" class="search-field"
            placeholder="Search here..."
            value="" name="s"
            title="Search for:" />
    </label>
    <input type="submit" class="search-submit"
        value="&#xf002;" />
</form>


<div id="neer-contact-info-classes-2" class="neer-single-sidebar clearfix neer-contact-info-classes"></div>

</div>-->


<div id="neer-contact-info-classes-2" class="neer-single-sidebar clearfix neer-contact-info-classes"></div>


<div id="categories-3" class="neer-single-sidebar clearfix widget_categories">

    <h3>Post Categories</h3>    


     <ul>

        
 @foreach($Categories as $Category)
    <li class="cat-item cat-item-15"><a href="{{route('blog.post.category', ['id'=>$Category->id])}}" >{{$Category->name}}</a> ({{count($Category->posts)}})
    </li>
@endforeach

        
    </ul>
</div>



<!--<div id="tag_cloud-1" class="neer-single-sidebar clearfix widget_tag_cloud"><h3>Tags</h3><div class="tagcloud"><a href="../tag/aside/index.html" class="tag-cloud-link tag-link-32 tag-link-position-1" style="font-size: 11.230769230769pt;" aria-label="aside (2 items)">aside</a>
<a href="../tag/audio/index.html" class="tag-cloud-link tag-link-33 tag-link-position-2" style="font-size: 8pt;" aria-label="Audio (1 item)">Audio</a>
<a href="../tag/blog/index.html" class="tag-cloud-link tag-link-34 tag-link-position-3" style="font-size: 16.615384615385pt;" aria-label="blog (5 items)">blog</a>
<a href="../tag/blogging/index.html" class="tag-cloud-link tag-link-35 tag-link-position-4" style="font-size: 18.769230769231pt;" aria-label="Blogging (7 items)">Blogging</a>
<a href="../tag/chat/index.html" class="tag-cloud-link tag-link-36 tag-link-position-5" style="font-size: 8pt;" aria-label="Chat (1 item)">Chat</a>
<a href="../tag/format/index.html" class="tag-cloud-link tag-link-37 tag-link-position-6" style="font-size: 22pt;" aria-label="format (11 items)">format</a>
<a href="../tag/image/index.html" class="tag-cloud-link tag-link-39 tag-link-position-7" style="font-size: 13.384615384615pt;" aria-label="Image (3 items)">Image</a>
<a href="../tag/journey/index.html" class="tag-cloud-link tag-link-40 tag-link-position-8" style="font-size: 8pt;" aria-label="Journey (1 item)">Journey</a>
<a href="../tag/link/index.html" class="tag-cloud-link tag-link-41 tag-link-position-9" style="font-size: 8pt;" aria-label="Link (1 item)">Link</a>
<a href="../tag/lorem/index.html" class="tag-cloud-link tag-link-42 tag-link-position-10" style="font-size: 17.871794871795pt;" aria-label="Lorem (6 items)">Lorem</a>
<a href="../tag/markup/index.html" class="tag-cloud-link tag-link-43 tag-link-position-11" style="font-size: 13.384615384615pt;" aria-label="Markup (3 items)">Markup</a>
<a href="../tag/passion/index.html" class="tag-cloud-link tag-link-44 tag-link-position-12" style="font-size: 13.384615384615pt;" aria-label="Passion (3 items)">Passion</a>
<a href="../tag/quote/index.html" class="tag-cloud-link tag-link-45 tag-link-position-13" style="font-size: 8pt;" aria-label="Quote (1 item)">Quote</a>
<a href="../tag/status/index.html" class="tag-cloud-link tag-link-47 tag-link-position-14" style="font-size: 8pt;" aria-label="Status (1 item)">Status</a>
<a href="../tag/travel/index.html" class="tag-cloud-link tag-link-48 tag-link-position-15" style="font-size: 8pt;" aria-label="Travel (1 item)">Travel</a>
<a href="../tag/video/index.html" class="tag-cloud-link tag-link-49 tag-link-position-16" style="font-size: 11.230769230769pt;" aria-label="Video (2 items)">Video</a></div>
</div> -->         



</div>
                    </div>
    </div>





@endsection
