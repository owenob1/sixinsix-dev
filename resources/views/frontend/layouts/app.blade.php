<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<!DOCTYPE html>
<html lang="en" data-cookies-popup="true">

<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="SixInSix">
	<!-- Title -->
	<title>SixInSix | Online Traffic & Growth Hacking Consulting</title>
	<!-- Favicons -->
	<link rel="shortcut icon" href="../assets/img/favicon.png">
	<link rel="apple-touch-icon" href="../assets/img/favicon_60x60.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon_76x76.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon_120x120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon_152x152.png">
	<!-- Google Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600' rel='stylesheet' type='text/css'>
	<!-- CSS Styles -->
	<link rel="stylesheet" href="../assets/css/styles.css" />
	<!-- CSS Base -->
	<link id="theme" rel="stylesheet" href="../assets/css/themes/theme-fire.css" />
	<!--Popup-->
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet"> </head>
	<style>
		.one-page, #modalCookies {
			padding-right: 0px!important;
		}
		@media only screen and (max-width: 991px){
			#nav-primary > li> a{
				color : #434343;
			}
		}
	</style>
	@yield('custom-css')
<body class="one-page header-absolute">
	<!-- Loader -->
	<div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
	<!-- Loader / End -->
	<!-- Header -->
	<header id="header" class=" fullwidth @if((\Request::route()->getName() == 'blogItem')) light @else  absolute transparent @endif">
		<!-- Navigation Bar -->
		<div id="nav-bar">
			<!-- Menu Toggle -->
			<div class="menu-toggle" style="margin-left:10px;"> <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a> </div>
			<!-- Logo --><a class="logo-wrapper" href="/" style="margin-left:45px;">
					<img class="logo logo-dark" src="../assets/img/sixinsix-black.svg" style="width:20%;" alt="SixInSix">
				</a>
			<nav class="module-group right">
				<!-- Primary Menu -->
				<div class="module menu left">
					<ul id="nav-primary" class="nav nav-primary">
						<li><a href="../">Home</a></li>
						<li><a href="../about">About Us</a></li>
						<li><a href="../services">Services</a></li>
						<li><a href="../blog">Blog</a></li>
						<li><a href="" onclick="Calendly.showPopupWidget('https://calendly.com/sixinsix/60min');return false;"><button type="button" class="btn btn-filled btn-primary btn-xs"><i class="i-before ti-user"></i>Book Consultation</button></a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!-- Notification Bar -->
		<div id="notification-bar"></div>
	</header>
	<!-- Header / End -->

		@yield('content')
		<!-- Footer -->
		<footer id="footer" class="dark bg-secondary pb-60">
			<div class="container text-center"> <img src="../assets/img/sixinsixlogo.svg" style="width:20%; padding:20px;" alt="SixInSix">
				<div class="text-muted"> Copyright SixInSix Consulting Pty Ltd 2018 © ACN 625 805 370. All rights reserved.</div>
				<ul class="nav nav-inline nav-sm mt-10">
					<li><a href="#home" data-target="local-scroll">Back To Top</a></li>
					<li><a href="https://www.sixinsix.co/docs/SixInSix_Privacy_Policy.pdf">Privacy Policy</a></li>
					<li><a href="../contact">Contact Us</a></li>
				</ul>
			</div>
		</footer>
		<!-- Footer / End -->
		<!-- JS Libraries -->
		<script src="../assets/js/jquery-1.12.3.min.js"></script>
		<!-- JS Plugins -->
		<script src="../assets/js/plugins.js"></script>
		<!-- JS Core -->
		<script src="../assets/js/core.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116008327-1"></script>
		<!--Calendly-->
		<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
		<!-- Google Analytics -->
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag('js', new Date());
			gtag('config', 'UA-116008327-1');
		</script>
		<script type="text/javascript">
			var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
			{widgetcode:"162479406400d40037c41ddb0b42209644b72d7c26ca76361db2ee0c0494f591bb970538b5c1aa88c9e268b80446e0a0", values:{},ready:function(){}};
			var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
			s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
		</script>

		<script type="text/javascript">
			var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq ||
			{widgetcode:"162479406400d40037c41ddb0b42209644b72d7c26ca76361db2ee0c0494f591bb970538b5c1aa88c9e268b80446e0a0", values:{},ready:function(){}};
			var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
			s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
		</script>

	</body>

</html>
