@extends('layouts.landing-page')

@section('content')




    <!--comment ajax script-->

     <script type="text/javascript">

        function isEmail(email) { 
    return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
} 

      
        function storeComment(post_id){


      if(window.XMLHttpRequest){
      
       xmlhttp = new XMLHttpRequest();           //creating an object for the users with browsers that support xmlhttp
      
      
      }else{
      
       xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
      
      }

      var comment=document.getElementById("comment").value;
     var author=document.getElementById("author").value;
     var email=document.getElementById("email").value;
     var token=document.getElementsByName("_token");



     if(comment!=""){

        if(author!=""){

            if(email!=""){
                if (isEmail(email)){  
        
    xmlhttp.onreadystatechange = function(){

    if(xmlhttp.readyState<4){
       document.getElementById("virtual_post").value = "Processing...";

    }
      
       if (xmlhttp.readyState==4){
  }




        

       var processResponse=xmlhttp.responseText;
     //  window.alert(processResponse);
        //document.getElementById().innerHTML=processResponse;
        
      document.getElementById("virtual_post").innerHTML = processResponse;

      document.getElementById('notify').innerHTML="<h6 style='color:green;'>Comment successfully added.</h6>";
            
       
       }
      


     var url ="{{route('blog.comment.create')}}?comment="+comment+"&author="+author+"&email="+email+"&post_id="+post_id+"&_token="+token;    //taking the form through the name given to it in the form 
         xmlhttp.open("GET",url, true);                                    //the'true' in this line of code makes it possible to search  
           xmlhttp.send();  

       }else{

        document.getElementById('email-label').innerHTML="Email <span style='color:red;'>Invalid email format</span>";

       }

       }else{
        document.getElementById('email-label').innerHTML="Email <span style='color:red;'>This field is required</span>";
       }

           }else{
            document.getElementById('author-label').innerHTML="Name <span style='color:red;'>This field is required</span>";
           } 


           }else{
            document.getElementById('comment-label').innerHTML="Comment <span style='color:red;'>This field is required</span>";
           }  
  


    }


    </script>


    <!--comment ajax script-->



                <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/2017/09/shutterstock_408737758.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                <div class="neer_section_data">
                                                                                                <h2>{{$Post->title}}</h2>
                                                                                                                </div>

                    </div>
                </div>
                    </div>
    
            


            <br><br><br>
                            <div class="container neer-all-sections neer-page-layout-sidebar-right">
                    <div class="row">

                        <div class="neer-single-blog-page-content col-md-9">
                            <div class="neer-inner-single-blog-data">
                                                                    <div class="neer-single-blog-thumb">
                                        <img width="1140" height="640" src="{{asset('uploads/'.$Post->cover)}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="{{asset('uploads/'.$Post->cover)}}" sizes="(max-width: 1140px) 100vw, 1140px" />                                    </div>
                                
                                <div class="neer-single-blog-data">


                                    <p style="text">{{$Post->sub_title}}</p>
                                    <hr>

                                    <div>
                                        {!!html_entity_decode($Post->body)!!}
                                    </div>



                                

                                </div>




                                <!--comment-->
                                <hr>

                                 @if($Post->allow_comment == 1)
                                    <div class="entry-comments-form clearfix">
                                        <div class="comments-wrapper">
                                            <div id="comments" class="comments-area">
                                                <header class="entry-header">
                                                    <div class="comments-title">
                                                        <h3><!--<span>{{count($Post->comments)}}</span>-->
                                                            comment<?php if(count($Post->comments) <=1)
                                                            {echo '.';
                                                        }else{
                                                    echo 's.';} ?></h3>
                                                    </div>
                                                </header>
                                                <div class="comment-list">


                                                    @foreach($Post->comments as $comment)

                                                    <ul class="media-list">
                                                <li class="media">
                                                    <div class="media-left">
                                                    <a href="#">
                                                      <i style="font-size: 400%;" class="fas fa-user-circle"></i>
                                                    </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <p><b>&nbsp;&nbsp;&nbsp;{{$comment->name}}</b></p>
                                                    <p>&nbsp;&nbsp;&nbsp;{{$comment->body}}</p>

                                                           

                                                    </div>
                                                </li>
                                            </ul>
                                            <hr>

                                                    @endforeach

                                            

                                                    <!--virtual post-->

                                                    <div id="virtual_post">
                                                        

                                                    </div>

                                                    <!--virtual post-->
                                                    


                                                    
                                                </div>




                                                  <!--comment section-->

                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Cancel reply</a></small></h3>
                                                    <form action="http://wp.color-theme.com/courage/wp-comments-post.php" method="post" id="commentform" class="comment-form">

                                                        {{ csrf_field() }}

                                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <p class="comment-form-comment">
                                                            <label for="comment" id="comment-label">Comment</label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author" id="author-label">Name <span class="required">*</span>
                                                            </label>
                                                            <input id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required='true' required='required' />
                                                        </p>
                                                        <p class="comment-form-email" >
                                                            <label for="email" id="email-label">Email <span class="required">*</span>
                                                            </label>
                                                            <input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required='true' required='required' />
                                                        </p>
                                                        
                                                        <p class="form-submit">
                                                            
                                                           <!-- <input type='hidden' name='comment_post_ID' value='24' id='comment_post_id' />-->

                                                            <input name="submit" type="button" id="submit" class="submit btn btn-default" value="Post Comment" onclick="storeComment({{$Post->id}})" />
                                                            
                                                        </p>

                                                        <div id="notify">
                                                            
                                                        </div>

                                                       <!-- <p style="display: none;">
                                                            <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="24f591bb0c" />
                                                        </p>
                                                        <p style="display: none;">
                                                            <input type="hidden" id="ak_js" name="ak_js" value="160" />
                                                        </p>-->
                                                    </form>
                                                </div>


                                                 <!--comment section-->







                                            </div>
                                        </div>
                                    </div>

                                    @endif

                                <!--comment-->




                                <div class="neer-footer-entry neer-single-footer-entry">
                                    <div class="neer_single_blog_meta">
                                        <ul>
                                                                                        
                                                                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                                                                            {{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;
                        {{date('h:i',strtotime($Post->created_at))}}
                                                                                        </li>
                                            <li><i class="fa fa-tag" aria-hidden="true"></i><a href="{{route('blog.post.category', ['id'=>$Post->category->id])}}">{{$Post->category->name}}</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div> <!-- ./End Neer Inner Single Blog Data -->

                            
    <!--<nav class="navigation post-navigation" role="navigation">
        <h2 class="screen-reader-text">Post navigation</h2>
        <div class="nav-links"><div class="nav-previous"><a href="../what-you-must-know-working-on-site/index.html" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span> <span class="screen-reader-text">Previous post:</span> <span class="post-title">What you must know Working on Site</span></a></div></div>
    </nav>--><br><br>
                            
                        </div>
                        
                                                






                                                <div class="neer-sidebar-faul col-md-3">
                            <div id="neer-contact-info-classes-2" class="neer-single-sidebar clearfix neer-contact-info-classes"></div><!--<div id="search-2" class="neer-single-sidebar clearfix widget_search">

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

</div>-->


<div id="categories-3" class="neer-single-sidebar clearfix widget_categories"><h3>Post Categories</h3>     <ul>
    @foreach($Categories as $Category)
    <li class="cat-item cat-item-15"><a href="{{route('blog.post.category', ['id'=>$Category->id])}}" >{{$Category->name}}</a> ({{count($Category->posts)}})
    </li>
@endforeach
        </ul>
</div>


<div id="categories-3" class="neer-single-sidebar clearfix widget_categories"><h3>Recent Posts</h3>   

    <ul class="recent-posts-widget recent-widget-619455814">


                                    @foreach($RecentPosts as $Post)
                                    <li class="clearfix">
                                        <div class="widget-content">
                                            <div class="widget-post-thumbnail">
                                                <a>
                                                    <img src="{{asset('uploads/'.$Post->cover)}}" alt="Neourban Hipster Fashion Travel" />
                                                </a>
                                            </div>

                                            <h6>
                                                <span style="font-size: 80%;color:silver;" class="popular-date">{{date('F d, Y', strtotime($Post->created_at))}}</span>
                                                <a href="{{route('blog.post.view', ['id'=>$Post->id])}}">{{$Post->title}}</a>
                                            </h6>
                                            <!--<span class="popular-date">{{date('F d, Y', strtotime($Post->created_at))}}</span>-->
                                        </div>
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
</div>-->                     


 </div>
                                            </div>
                </div>








@endsection
