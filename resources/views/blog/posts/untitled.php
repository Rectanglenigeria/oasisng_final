 <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="page-title" class="clearfix">
                         @if(isset($CategoryDetails))
                        <div class="single-title">
                            <h1 class="entry-title" style="text-transform: capitalize;">Blog</h1>
                        </div> 
                        <span class="entry-header-meta">
                         <span class="cat-desc">
                             Collection of comprehensive hacking posts
                         </span> 
                         

                        </span>

                        @else

                        <div class="single-title">
                            <p style="text-transform: uppercase;">Browsing category</p>
                            <h4>{{$CategoryDetails->name}}</h4>
                        </div> 
                        <span class="entry-header-meta">
                         <span class="cat-desc">
                             {{$CategoryDetails->desc}}
                         </span> 
                         

                        </span>

                        @endif



                    </div>
                </div>
            </div>
        </div>



 
    </header>









  <div id="main-content" class="main-content clearfix">
        <div id="primary" role="main">
            <div id="blog-entry" class="clearfix">

                @foreach($Posts as $Post)


                <article id="post-24" class="entry-post clearfix post-24 post type-post status-publish format-image has-post-thumbnail hentry category-travel tag-fashion tag-hipster tag-photo tag-travel post_format-post-format-image" itemscope itemtype="">
                    <figure class="post-thumbnail scrollflow -slide-top -opacity" data-scrollflow-start="10">
                        <a href="#">
                            <img src="{{asset('uploads/'.$Post->cover)}}" title="" alt="post cover" />
                        </a>
                    </figure>
                    <div class="entry-content scrollflow -slide-bottom -opacity " data-scrollflow-start="20">
                        <h3 class="entry-title">
                            <a href='#' style="text-transform: capitalize;">
                                {{$Post->title}}
                            </a>
                        </h3> 
                         <span class="entry-date"> <span class="date-line"></span>  
                         <a href="#">
                         {{date('F d, Y', strtotime($Post->created_at))}}&nbsp;|&nbsp;
                        {{date('h:i',strtotime($Post->created_at))}}
                     </a> 
                        </span>
                        
                        <div class="post-format"> <i class="fa fa-picture-o"></i>
                        </div>
                        <div class="readmore-wrap">
                            <div class="entry-more clearfix">...</div> 
                            <a class="more-post-link" href="{{route('blog.post.view',['id'=>$Post->id])}}">Read Article</a>
                        </div>
                    </div>
                </article>


                @endforeach


               


                </div>




              
                <div class="navigation-block nav-homepage">
                    <div class="pagination clearfix" role="navigation">

                        {{$Posts->links()}}
                    </div>
                </div>



            </div>
        </div>




