<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset($BusinessDetails->businessPhoto)}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset($BusinessDetails->businessPhoto)}}" type="image/x-icon">
    <title>Dashboard|{{($BusinessDetails->BusinessName)}}</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/font-awesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/chartist.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/vector-map.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('business_assets/css/admin.css')}}">



 
   

  
    <!-- Datatables css-->
    <link rel="stylesheet" type="text/css" href="{{('business_assets/css/datatables.css')}}">

   
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="{{asset($BusinessDetails->businessPhoto)}}" alt="" width="210px" height="80px"></a></div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>EN</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="#" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success mr-3"><i data-feather="thumbs-up"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-success">Someone Likes Your Posts</h6>
                                        <p class="mb-0"> 2 Hours Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-info mr-3"><i data-feather="message-circle"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-info">3 New Comments</h6>
                                        <p class="mb-0"> 1 Hours Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-secondary mr-3"><i data-feather="download"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">Download Complete</h6>
                                        <p class="mb-0"> 3 Days Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-light txt-dark"><a href="#" data-original-title="" title="">All </a> notification</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{asset('business_assets/images/dashboard/man.png')}}" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="{{route('vendorAdmin.profile', $BusinessDetails->id)}}">Profile<span class="pull-right"><i data-feather="user"></i></span></a></li>
                            <li><a href="#">Inbox<span class="pull-right"><i data-feather="mail"></i></span></a></li>
                            <li><a href="#">Taskboard<span class="pull-right"><i data-feather="file-text"></i></span></a></li>
                            <li><a href="#">Settings<span class="pull-right"><i data-feather="settings"></i></span></a></li>
                            <li>
                              <form action="{{route('businessPage.logout')}}" method="post">
                                @method('POST')
                                @csrf
                              <a href="#">logout<span class="pull-right"><i data-feather="Logout"></i></span></a>
                              <input type="submit" value="logout" class="pull-right">
                              </form>
                                
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{asset($BusinessDetails->userPhoto)}}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">{{$BusinessDetails->BusinessName}}</h6>
                    <p>{{$BusinessDetails->BusinessSubtitle}}</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                                    <li><a href="{{url('Business/Category', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="{{url('Business/brand-add', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Add Brand</a></li>
                                    <li><a href="{{url('Business/brand-list', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Brand List</a></li>
                                    <li><a href="{{url('Business/Category-list', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>List Category</a></li>
                                    <li><a href="{{url('Business/product-list', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a></li>
                                    <li><a href="{{url('Business/product-add', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Add Product</a></li>
                        </ul>
                            
                           
                        
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('Business/sels/order', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Orders</a></li>
                           
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Slider</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('Business/slider-add', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Add Slider</a></li>
                            <li><a href="{{url('Business/slider-list', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>List Slider</a></li>
                           
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Seeting</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{url('Business/theme-seeting', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>Theme Seeting</a></li>
                            <li><a href="{{url('Business/slider-list', $BusinessDetails->id)}}"><i class="fa fa-circle"></i>List Slider</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="../assets/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        @yield('admin-body')

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © Aemal World All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>

</div>

<!-- latest jquery-->
<script src="{{asset('business_assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('business_assets/js/popper.min.js')}}"></script>
<script src="{{asset('business_assets/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('business_assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('business_assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('business_assets/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('business_assets/js/chart/chartist/chartist.js')}}"></script>


<!-- lazyload js-->
<script src="{{asset('business_assets/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('business_assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('business_assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('business_assets/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{asset('business_assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('business_assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('business_assets/js/counter/counter-custom.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('business_assets/js/admin-customizer.js')}}"></script>

<!--map js-->
<script src="{{asset('business_assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('business_assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>

<!--apex chart js-->
<script src="{{asset('business_assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('business_assets/js/chart/apex-chart/stock-prices.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('business_assets/js/chart/flot-chart/excanvas.js')}}"></script>
<script src="{{asset('business_assets/js/chart/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('business_assets/js/chart/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('business_assets/js/chart/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('business_assets/js/chart/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('business_assets/js/chart/flot-chart/jquery.flot.pie.js')}}"></script>
<!--dashboard custom js-->
<script src="{{asset('business_assets/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('business_assets/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('business_assets/js/equal-height.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('business_assets/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src="{{asset('business_assets/js/admin-script.js')}}"></script>


<!-- Datatable js-->
<script src="{{('business_assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{('business_assets/js/datatables/custom-basic.js')}}"></script>







</body>
</html>
