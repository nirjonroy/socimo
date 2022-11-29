<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Socimo | Social Media Network Template</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('frontend/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

</head>
<body>
<div class="page-loader" id="page-loader">

  <div class="loader"><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span></div>

</div><!-- page loader -->
<div class="theme-layout">
	
	<div class="authtication bluesh high-opacity">
		<div class="bg-image" style="background-image: url(images/resources/login-bg3.jpg)"></div>
		<ul class="welcome-caro">
			<li class="welcome-box">
				<figure><img src="{{asset('frontend/images/resources/login-1.png')}}" alt=""></figure>
				<h4>Ask questions with seniors Researchers</h4>
				<p>
					Ask questions and get the experienced answer by researchers and others fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('frontend/images/resources/login-2.png')}}" alt=""></figure>
				<h4>Find New Researchers or Friends</h4>
				<p>
					Join Socimo and make your network of university or college fellows.
				</p>
			</li>
			<li class="welcome-box">
				<figure><img src="{{asset('frontend/images/resources/login-3.png')}}" alt=""></figure>
				<h4>Sell Your Online paid Content</h4>
				<p>
					Sell your online lectures, videos, books and many more with Socimo.
				</p>
			</li>
			
		</ul>
	</div>
	@yield('login')
    
	
</div>
	
	<script src="{{asset('frontend/js/main.min.js')}}"></script>
	<script src="{{asset('frontend/js/script.js')}}"></script>
	

</body>	
</html>