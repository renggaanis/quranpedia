<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Qur'anPedia</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('public/homeawal/assets/img/favicon.ico')}}" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/style.css')}}" />

	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">

			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
				
          <div class="dropdown-menu dropdown-list dropdown-menu-right"></div>
          </li>
          <li class="dropdown"><a href="/webquranpedia/profile" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img style ="border-radius: 50px" width="50px" alt="image" src="{{ Auth::user()->avatar }}">
            	<div class="d-sm-none d-lg-inline-block">Hi {{ Auth::user()->name }}</div></a>
                	<div class="dropdown-menu dropdown-menu-right">
						@if(auth()->user()->role == 'pelanggan')
                		<a href="/webquranpedia/profile" class="dropdown-item has-icon">
                  			<i class=""></i> Profile</a>
              			<a href="/webquranpedia/pelanggan" class="dropdown-item has-icon">
                  			<i class=""></i> Data Diri</a>
                  		<a href="/webquranpedia/password/reset" class="dropdown-item has-icon">
                  			<i class=""></i> Ganti Password</a>
						@endif
                		<div class="dropdown-divider"></div>
                  			<a class="dropdown-item" href="{{ route('logout') }}"
                  				onclick="event.preventDefault();
                  				document.getElementById('logout-form').submit();">
                  				{{ __('Logout') }}
                 			 </a>

              			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  		@csrf
              			</form>
            		</div>
          </li>
							
								
							
						<!-- <li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="/webquranpedia/dashboard" class="logo"><img height="100px" src="{{ asset('public/frontend/img/header1.png') }}" alt=""></a>
					</div>
					<!-- /logo -->
					
					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{route('web.cari')}}" method="get">
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->
			 
			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="/webquranpedia/dashboard">Beranda</a></li>
						<li><a href="{{ route('web.list')}}">Artikel</a></li>
						<li><a href="http://localhost/webquranpedia/list-event">Event</a></li>

						<li class="has-dropdown">
							<a href="#">Kategori</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach($category_widget as $result1)
										<li><a href="{{ route('web.category', $result1->slug)}}">{{$result1->name}}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</li>

						<li class="has-dropdown">
							<a href="#">Surat</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										
										<li><a href="http://localhost/webquranpedia/quran">DaftarSurat</a></li>
									
									</ul>
								</div>
							</div>
						</li>
						<li><a href="http://localhost/webquranpedia/bab">Pemetaan bab</a></li>
						<li><a href="/webquranpedia/pelanggandonasi">Donasi</a></li>
						
						
						</li>
						@if(auth()->user()->role == 'admin')
						<li><a href="http://localhost/webquranpedia/profilebackend">Backend</a></li>
						@endif
						@if(auth()->user()->role == 'kontributor')
						<li><a href="http://localhost/webquranpedia/profilebackend">Backend</a></li>
						@endif
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="index.html">Home</a></li>
					<li class="has-dropdown"><a>Categories</a>
						<ul class="dropdown">
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Health</a></li>
						</ul>
					</li>
					<li><a href="about.html">About Us</a></li>
					<li><a href="contact.html">Contacts</a></li>
					<li><a href="#">Advertise</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->