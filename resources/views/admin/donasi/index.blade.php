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
    <link type="text/css" rel="stylesheet" href="public/frontend/css/bootstrap.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="public/frontend/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="public/frontend/css/style.css" />

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</style>

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
                        <li><a href="#"><i class=""></i></a></li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="http://localhost/webquranpedia/dashboard" class="logo"><img src="{{ asset('public/frontend/img/header1.png') }}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    
                </div>
            </div>
            <!-- /Top Nav -->
            
        </div>
        <!-- /NAV -->
    </header>

    <div class="section">
    <!-- container -->
    <div class="container">
            <!-- row -->
      <div id="hot-post" class="row hot-post">
      <form>
        <div>
        <img style="width: 300px" src="{{ asset('public/assets/img/logo-gopay.jpg') }}" alt="">
        </div>
        <br>
        <small id="" class="">Pelanggan yang bermurah hati, <br> donasi anda kami perlukan untuk pengembangan website <br> dan untuk anda mengakses ke website. Terima kasi atas kemurahan hati anda</small>
        <br><br>
        <form action="" method="POST">
            @csrf
            @method('delete')
          <a href="{{ route('donasi.create' ) }}" class="btn btn-primary btn-sm">Donasi</a>
          </form>
    </div>
  </div>
