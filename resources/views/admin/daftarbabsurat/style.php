<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>QuranPedia</title>

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
                        <a href="index.html" class="logo"><img src="public/frontend/img/logo.png" alt=""></a>
                    </div>
                    <!-- /logo -->

                    
                </div>
            </div>
            <!-- /Top Nav -->
            
            <!-- Main Nav -->
            <div id="nav-bottom">
                <div class="container">
                    <!-- nav -->
                    <ul class="nav-menu">
                        <li><a href="http://localhost/webquranpedia/">Kembali Beranda</a></li>
                        <!-- <li><a href="{{ route('web.list')}}">Artikel</a></li>
                        <li class="has-dropdown">
                            <a href="#">Kategori</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        @foreach($category_widget as $result1)
                                        <li><a href="category.html">{{$result1->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li> -->

                        <!-- <li class="has-dropdown">
                            <a href="#">Surat</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        
                                        <li><a href="http://localhost/webquranpedia/daftar-surat">DaftarSurat</a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <!-- <li><a href="#">Travel</a></li> -->
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