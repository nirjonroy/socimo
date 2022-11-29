<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>socimo | Dashboard</title>
    <link rel="icon" href="{{asset('backend/images/fav.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('backend/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css')}}">
	<link href="{{asset('backend/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="page-loader" id="page-loader">
	 <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
	 <span>Loading...</span>
</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="res-logo"><img src="images/logo.png" alt=""></div>
		
		<div class="user-avatar mobile">
			<a href="profile.html" title="View Profile"><img alt="" src="images/resources/user.jpg"></a>
			<div class="name">
				<h4>Saim Turan</h4>
				<span>Antalaya, Turky</span>
			</div>
		</div>
		<div class="right-compact">
			<div class="menu-area">
				<div id="nav-icon3">
					<i>
<svg class="feather feather-grid" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><rect height="7" width="7" y="3" x="3"/><rect height="7" width="7" y="3" x="14"/><rect height="7" width="7" y="14" x="14"/><rect height="7" width="7" y="14" x="3"/></svg>
						</i>
				</div>
				<ul class="drop-menu">
				  	<li><a title="profile.html" href="profile.html"><i class="icofont-user-alt-1"></i>Your Profile</a></li>
					<li><a title="" href="#"><i class="icofont-question-circle"></i>Help</a></li>
					<li><a title="" href="#"><i class="icofont-gear"></i>Setting</a></li>
					<li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i>Dark Mode</a></li>
					<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
				</ul>
			</div>
			<div class="res-search">
				<span><i>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></i></span>
			</div>
		</div>
		<div class="restop-search">
			<span class="hide-search"><i class="icofont-close-circled"></i></span>
			<form method="post">
				<input type="text" placeholder="Search...">
			</form>
		</div>
	</div><!-- responsive header -->
	
	<header class="">
		<div class="topbar stick">
			<div class="logo"><img alt="" src="images/logo.png"><span>Socimo</span></div>
			<div class="searches">
				<form method="post">
					<input type="text" placeholder="Search...">
					<button type="submit"><i class="icofont-search"></i></button>
				</form>
			</div>
			<ul class="web-elements">
				<li>
					<div class="user-dp">
						<a href="profile-page2.html" title="">
							<img src="images/resources/user.jpg" alt="">
							<div class="name">
								<h4>Danial Cardos</h4>
							</div>
						</a>	
					</div>
				</li>
				<li>
					<a href="index.html" title="Home" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></i>
					</a>
				</li>
				<li>
					<a class="mesg-notif" href="#" title="Messages" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>
					</a>
					<span></span>
				</li>
				<li>
					<a class="mesg-notif" href="#" title="Notifications" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></i>
					</a>
					<span></span>
				</li>
				<li>
					<a class="create" href="#" title="Add New" data-toggle="tooltip">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></i>
					</a>
				</li>
				<li>
					<a title="" href="#">
						<i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
						</i>
					</a>
					<ul class="dropdown">
						<li><a href="profile.html" title=""><i class="icofont-user-alt-3"></i> Your Profile</a></li>
						<li><a href="add-new-course.html" title=""><i class="icofont-plus"></i> New Course</a></li>
						<li><a class="invite-new" href="#" title=""><i class="icofont-brand-slideshare"></i> Invite Collegue</a></li>
						<li><a href="pay-out.html" title=""><i class="icofont-price"></i> Payout</a></li>
						<li><a href="price-plan.html" title=""><i class="icofont-flash"></i> Upgrade</a></li>
						<li><a href="help-faq.html" title=""><i class="icofont-question-circle"></i> Help</a></li>
						<li><a href="settings.html" title=""><i class="icofont-gear"></i> Setting</a></li>
						<li><a href="privacy-n-policy.html" title=""><i class="icofont-notepad"></i> Privacy</a></li>
						<li><a class="dark-mod" title="" href="#"><i class="icofont-moon"></i> Dark Mode</a></li>
						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</ul>
				</li>
			</ul>
		</div>
		
	</header><!-- header -->
	
	<div class="top-sub-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="menu-btn">
						<i class="">
<svg id="menu-btn" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></i>
					</div>
					<div class="page-title">
						<h4>Dashboard</h4>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<ul class="breadcrumb">
						<li><a href="#" title="">Home</a></li>
						<li><a href="#" title="">Dashboard</a></li>
					</ul>
				</div>
			</div>
		</div>	
	</div><!-- top sub bar -->
	
	<nav class="sidebar">
		<ul class="menu-slide">
			<li class="active">
				<a class="" href="{{route('dashboard')}}" title="">
					<i><svg id="icon-home" class="feather feather-home" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></i> Dashboard
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.analytics')}}" title="">
					<i class=""><svg id="ab7" class="feather feather-zap" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></i>Analytics
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.userBusiness.report')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Business Page
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.user')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Users Report
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.userPost.report')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Users Post Report
				</a>
			</li>
			<li class="">
				<a class="" href="{{url('view/userBusinessSliders')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Shop Slider 
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.userFriend.report')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					User Friend
				</a>
			</li>

			<li class="">
				<a class="" href="{{route('dashboard.bank.account')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					Bank Accounts
				</a>
			</li>

			<li class="">
				<a class="" href="{{route('dashboard.userDepossit.account')}}" title="">
					<i><svg id="ab1" class="feather feather-users" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle r="4" cy="7" cx="9"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></i>
					User and Vendor Depossit
				</a>
			</li>

			<li class="">
				<a class="" href="{{route('dashboard.Order.Business')}}" title="">
					<i class="">
<svg id="ab3" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></i>Business Orders
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.events')}}" title=""><i class="">
<svg id="ab4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></i>Events
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.products')}}" title="">
					<i class="">
<svg id="ab5" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></i>Products
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.blog')}}" title="">
					
					<i class="">						
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
</i>Blogs
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.message')}}" title="">
					<i class="">
<svg id="ab2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></i>Messages
				</a>
			</li>
			
			<li class="">
				<a class="" href="{{route('dashboard.team')}}" title="">
					<i class="">

<svg id="team" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg></i>Team
				</a>
			</li>
			<li class="">
				<a class="" href="{{route('dashboard.login_register')}}" title="">
					<i class="">
<svg id="ab9" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></i>Login/Register
				</a>
			</li>
			<li class="menu-item-has-children">
				<a class="" href="#" title="">
					<i><svg id="ab8" class="feather feather-file" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="14" width="14" xmlns="http://www.w3.org/2000/svg"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"/><polyline points="13 2 13 9 20 9"/></svg></i>Pages
				</a>
				<ul class="submenu">
					<li><a href="404.html" title="">Error 404</a></li>
					<li><a href="forgot-password.html" title="">Forgot Password</a></li>
					<li><a href="loaders.html" title="">Loaders/spiners</a></li>
					<li><a href="invoice-edit.html" title="">Invoice</a></li>
					<li><a href="maps.html" title="">Google Maps</a></li>
					<li><a href="http://wpkixx.com/html/socimo/development-elements.html" title="">Elements</a></li>
					<li><a href="http://wpkixx.com/html/socimo/development-component.html" title="">Components</a></li>
				</ul>
			</li>
		</ul>
	</nav><!-- sidebar -->





    @yield('dashboard-body')







	
	<script src="{{asset('backend/js/main.min.js')}}"></script>
	<script src="{{asset('backend/js/vivus.min.js')}}"></script>
	<script src="{{asset('backend/js/script.js')}}"></script>
	
	<script src="{{asset('backend/plugins/apex/apexcharts.min.js')}}"></script>
	<script src="{{asset('backend/js/graphs-scripts.js')}}"></script>

	

</body>	
</html>