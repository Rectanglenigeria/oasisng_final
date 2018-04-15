@extends('layouts.blog')

@section('content')


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="page-title" class="clearfix">
                        <div class="single-title">
                            <h1 class="entry-title" style="text-transform: capitalize;">{{$Post->title}}</h1>
                        </div> 
                        <span class="entry-header-meta">
                         <span class="cat-desc">Posted on&nbsp;</span> 
                          <a>
                            {{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;{{date('h:i',strtotime($Post->created_at))}}
                        </a> 

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>


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


    <div id="primary" class="content-area">
        <div id="main" class="site-main" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 scrollflow -slide-top -opacity " data-scrollflow-start="10">
                        <div id="post-24" class="single-post clearfix post-24 post type-post status-publish format-image has-post-thumbnail hentry category-travel tag-fashion tag-hipster tag-photo tag-travel post_format-post-format-image" itemscope itemtype="http://schema.org/BlogPosting">
                            <div class="entry-single-post clearfix" role="main" itemprop="articleBody">
                                <div class="post-thumbnail">

                                    <img style="margin: 0px -20px 0px -20px; padding: 0px -20px 0px -20px;" src="{{asset('uploads/'.$Post->cover)}}" />

                                </div>
                                <div class="content-wrapper">
                                    
                                    <div>
                                        {!!html_entity_decode($Post->body)!!}
                                    </div>


                                  



                                   <!-- <nav class="post-navigation clearfix" role="navigation">
                                        <div class="nav-links clearfix"> <span class="nav-left">Previous Post <a href="../wall-food-bread/index.html" rel="prev">Wall Food &#8211; Bread</a></span>
                                        </div>
                                    </nav>-->

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
                                                <ol class="comment-list">


                                                    @foreach($Post->comments as $Comment)

                                                    <li class="comment even thread-even depth-1" id="li-comment-7">
                                                        <div id="comment-7" class="comment clearfix">
                                                            <div class="comment-block">
                                                                <header class="comment-meta comment-author vcard clearfix">
                                                                    <div class="comment-avatar">
                                                                        <img alt='' src='http://0.gravatar.com/avatar/0c661574016319819b09715da00dc310?s=50&amp;d=mm&amp;r=g' srcset='http://0.gravatar.com/avatar/0c661574016319819b09715da00dc310?s=100&amp;d=mm&amp;r=g 2x'
                                                                        class='avatar avatar-50 photo' height='50' width='50' />
                                                                    </div>
                                                                </header>
                                                                <div class="comment-body"> <cite class="fn"><a href='../../../color-theme.com/index.html' rel='external nofollow' class='url'>{{$Comment->name}}</a></cite>
                                                                    <a class="comment-time muted-small" ">
                                                                        <time datetime="2015-06-24T13:19:35+00:00">

                                                                        {{date('F d, Y', strtotime($Comment->created_at))}}&nbsp;|&nbsp;{{date('h:i',strtotime($Comment->created_at))}}
                                                                    </time>
                                                                    </a>
                                                                    <!--<div class="entry-reply clearfix"> <a rel='nofollow' class='comment-reply-link' href='index41b7.html?replytocom=7#respond' onclick='return addComment.moveForm( "comment-7", "7", "respond", "24" )' aria-label='Reply to Howard Davis'>Reply</a>
                                                                    </div>-->
                                                                    <br>
                                                                    <div class="comment-content comment clearfix">
                                                                        <p>
                                                                            {{$Comment->body}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </li>

                                                    @endforeach

                                                    <!--virtual post-->

                                                    <li id="virtual_post">
                                                        

                                                    </li>

                                                    <!--virtual post-->



                                                    


                                                    
                                                </ol>





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

                                                            <input name="submit" type="button" id="submit" class="submit" value="Post Comment" onclick="storeComment({{$Post->id}})" />
                                                            
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar" class="col-md-4 scrollflow -slide-bottom -opacity " data-scrollflow-start="20" role="complementary">
                        <div class="sidebar-inner">



                            <aside id="ct_categories_widget-1" class="widget ct-categories-widget clearfix">
                                <h3 class="entry-title">Categories</h3>
                                <ul class="ct-category-list">

                                    @foreach($Categories as $Category)
                                    <li><a href="{{route('blog.post.category', ['id'=>$Category->id])}}" title="View all posts in Food">{{$Category->name}}<span class="category-count">{{count($Category->posts)}}</span></a>
                                    </li>
                                    @endforeach


                                    
                                </ul>
                            </aside>



                            <!--<aside id="text-1" class="widget widget_text clearfix">
                                <div class="textwidget">
                                    <div class="ct-google-ads">
                                        <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7790268676081593" data-ad-slot="9220875063" data-ad-format="auto"></ins> 
                                        <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});
                                        </script>
                                    </div>
                                </div>
                            </aside>-->





                            <aside id="ct_recent_posts_widget-1" class="widget ct_recent_posts_widget clearfix">
                                <h3 class="entry-title">Recent Posts</h3>
                                <ul class="recent-posts-widget recent-widget-619455814">


                                    @foreach($RecentPosts as $Post)
                                    <li class="clearfix">
                                        <div class="widget-content">
                                            <div class="widget-post-thumbnail">
                                                <a>
                                                    <img src="{{asset('uploads/'.$Post->cover)}}" alt="Neourban Hipster Fashion Travel" />
                                                </a>
                                            </div>
                                            <h4 class="entry-title"><a href="{{route('blog.post.view', ['id'=>$Post->id])}}">{{$Post->title}}</a></h4><span class="popular-date">{{date('F d, Y', strtotime($Post->created_at))}}</span>
                                        </div>
                                    </li>

                                    @endforeach
                                </ul>
                            </aside>
                          
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
