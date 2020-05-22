 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Backend &mdash; Quranpedia</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('public/homeawal/assets/img/favicon.ico')}}" />

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('public/assets/modules/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/modules/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/modules/select2/dist/css/select2.min.css') }}">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/components.css') }}">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    @include('template_backend.header') 
    <!-- include untuk menambahkan tempplate header yang ada pada file header.blade.php-->
    <!-- <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            
          
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('public/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
         
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              
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
        </ul>
      </nav> -->
   
   @include('template_backend.sidebar') 
   <!-- include untuk menambahkan tempplate sidebar yang ada pada file sidebar.blade.php-->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('sub-judul')</h1>
            <!-- yield sub judul digunakan untuk penamaan sub judul menjadi dinamis, menyesuaikan dengan nama yang digunakan -->
            <!-- contoh penerapan, pada file index folder category -->
          </div>
			@yield('content') 
      <!-- sebagai tempat section yang ada pada file create, edit, index pada folder category, dan file lainnya yang memiliki section dengan nama "content" -->
          <div class="section-body">
          </div>
        </section>
      </div>
      
      @include('template_backend.footer') 
      <!-- include untuk menambahkan tempplate footer yang ada pada file footer.blade.php-->