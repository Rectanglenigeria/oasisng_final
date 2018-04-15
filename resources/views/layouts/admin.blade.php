<!DOCTYPE html>
<html>
    
<!-- Mirrored from coderthemes.com/ubold/material/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 19:07:07 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="{{asset('wp-content/uploads/logo.png')}}">

        <title>Admin</title>

         <!-- DataTables -->
        <link href="{{asset('admin/assets/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('admin/assets/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('admin/assets/css/morris.css')}}">

        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
        
        <!--<link href="{{asset('admin/assets/css/summernote-bs4.css')}}" rel="stylesheet" type="text/css" />-->
         <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet" type="text/css" />
       
        

         <link href="{{asset('admin/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>OASIS CS</span></a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                        <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                        <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                       

                        <li class="list-inline-item notification-list">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="dripicons-expand noti-icon"></i>
                            </a>
                        </li>

                       

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('admin/assets/images/users/placeholder.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome</small> </h5>

                                    
                                </div>

                                <div class="dropdown-item noti-title">
                                 <ul>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                                </div>

                                
                                
                               

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                       
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li class="text-muted menu-title">Navigation</li>

                            <li class="active">
                                <a href="{{route('admin.home')}}" class="waves-effect">
                                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                                    <span> Dashboard </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Posts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.post.create')}}">Add post</a></li>
                                    <li><a href="{{route('admin.post.list')}}">View posts</a></li>
                                    <li><a href="{{route('admin.category.create')}}">Add category</a></li>
                                    <li><a href="{{route('admin.category.list')}}">View categories</a></li>
                                </ul>
                            </li>
                            
                         

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Manage service</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.service.create')}}">Add</a></li>
                                    <li><a href="{{route('admin.service.list')}}">View</a></li>
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Manage roles</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.role.create')}}">Add</a></li>
                                    <li><a href="{{route('admin.role.list')}}">View</a></li>
                                </ul>
                            </li>



                           



                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Manage testimony</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.testimony.create')}}">Add</a></li>
                                    <li><a href="{{route('admin.testimony.list')}}">View</a></li>
                                </ul>
                            </li>


                             <!--<li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span>Payment method</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.paymentmethod.create')}}">Add</a></li>
                                    <li><a href="{{route('admin.paymentmethod.list')}}">View</a></li>
                                </ul>
                            </li>-->





                            <li class="">
                                <a href="{{route('admin.request.list')}}" class="waves-effect">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <span> Job Applications </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                
                            </li>


                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span>Manage openings</span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.role.create')}}">Add</a></li>
                                    <li><a href="{{route('admin.role.list')}}">View</a></li>
                                </ul>
                            </li>


                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Manage staffs </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.team.create')}}">Add staff</a></li>
                                    <li><a href="{{route('admin.team.list')}}">View staffs</a></li>
                                </ul>
                            </li>


                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Manage clients </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.client.create')}}">Add client</a></li>
                                    <li><a href="{{route('admin.client.list')}}">View clients</a></li>
                                </ul>
                            </li>



                             <li class="">
                                <a href="{{route('admin.inbox.list')}}" class="waves-effect">
                                    <i class="fa fa-users" aria-hidden="true"></i>
                                    <span> Contact Messages </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                
                            </li>


                             

                            

                             <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span> Config </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('admin.register')}}">Create Admin</a></li>
                                    <li><a href="{{route('admin.about.create')}}">Update About</a></li>
                                </ul>
                            </li>

                             


                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->


















            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">



                @yield('content')
               




                <footer class="footer text-right">
                    &copy; <?php echo date('Y');?>. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
           // var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/popper.min.js')}}"></script><!-- Popper for Bootstrap -->
        <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('admin/assets/js/bootstrap-tagsinput.js')}}"></script>
         <script src="{{asset('admin/assets/js/bootstrap-tagsinput-angular.js')}}"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
        
        <script src="{{asset('admin/assets/js/detect.js')}}"></script>
        <script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('admin/assets/js/waves.js')}}"></script>
        <script src="{{asset('admin/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('admin/assets/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('admin/assets/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/buttons.bootstrap4.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/jszip.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/pdfmake.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/vfs_fonts.js')}}"></script>
        <script src="{{asset('admin/assets/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('admin/assets/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/jquery.peity.min.js')}}"></script>

        <!-- Counterup  -->
        <script src="{{asset('admin/assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.counterup.min.js')}}"></script>

        <script src="{{asset('admin/assets/js/morris.min.js')}}"></script>
        <script src="{{asset('admin/assets/js/raphael-min.js')}}"></script>

        <script src="{{asset('admin/assets/pages/jquery.dashboard_4.js')}}"></script>

        <script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>

    </body>

<!-- Mirrored from coderthemes.com/ubold/material/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 19:07:08 GMT -->
</html>