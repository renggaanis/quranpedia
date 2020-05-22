<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="google" value="notranslate">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Al Quran</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/style.css')}}" />

<style>
 
@font-face {
  font-family: 'Uthmani';
  src : url('http://localhost/webquranpedia/sources/font/UthmanicHafs1 Ver09.otf') format('truetype');
}
 
h3{
  background:#222;
  color:#f9f9f9;
   padding:5px;
}
 
.arabic{
    font-family: 'Uthmani', serif;
    font-size: 28px; font-weight: normal;
    direction:rtl;
    padding : 0 5px;
    margin : 0;
}
.arabic_number {
    font-size: 28px; font-weight: normal;
}
.arabic_center{
    font-family: 'Uthmani', serif;
    font-size: 28px; font-weight: normal;
    text-align:center;
    padding : 0 5px;
    margin : 0;
}
.latin {
    font-family: serif;
    font-size: 14px; font-weight: normal;
    direction:ltr;
    padding : 0;
    margin : 0;
}
 
</style>
 </head>
<body>

<header id="header">
        <!-- NAV -->
        <div id="nav">
            <!-- Top Nav -->
            <div id="nav-top">
                <div class="container">
                    <!-- social -->
                    <ul class="nav-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- /social -->

                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="index.html" class="logo"><img src="{{ asset('public/frontend/img/logo.png') }}" alt=""></a>
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
                        <li><a href="{{url('')}}">Beranda</a></li>
                        <li><a href="{{ route('web.list')}}">Artikel</a></li>
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
                        </li>

                        <li class="has-dropdown">
                            <a href="#">Surat</a>
                            <div class="dropdown">
                                <div class="dropdown-body">
                                    <ul class="dropdown-list">
                                        
                                        <li><a href="http://localhost/webquranpedia/daftar-surat">DaftarSurat</a></li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Travel</a></li>
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

<?php
$surat = isset($_GET['surat']) ? $_GET['surat'] : 0;
$nama = isset($_GET['nama']) ? $_GET['nama'] : '';
if($surat == 0)
    show_daftar();
else
    show_quran($surat, $nama);
 
function show_daftar(){
    mb_internal_encoding('UTF-8');
    $data = database("SELECT `index`, surat_indonesia, arti, jumlah_ayat FROM DaftarSurat");
    echo '<table>';
    echo '<tr><th>No.</th><th>Surah</th><th>Arti</th><th>Juml.Ayat</th></tr>';
    foreach($data as $d){
        echo '<tr><td>'.$d['index'].'</td><td><a href="quran?surat='.$d['index'].'&nama='.$d['surat_indonesia'].'">'.$d['surat_indonesia'].'</a></td><td>'.$d['arti'].'</td></td><td>'.$d['jumlah_ayat'].'</td></tr>';
    }
    echo '</table>';
}
function show_quran($surat, $nama=''){ 
    mb_internal_encoding('UTF-8');
    if (($surat < 1) || ($surat > 114)) exit;
    echo '<p><a href="http://localhost/webquranpedia/alquran">Kembali ke Index</a></p>';
    echo '<h3>'.$nama.'</h3>';
    if($surat > 1) {
        echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
        echo '<hr />';
    }
 
    $data = database("SELECT A.text as arabic, B.text as indonesia FROM ArabicQuran A LEFT OUTER JOIN IndonesianQuran B ON A.ID=B.ID WHERE A.surat = $surat");
 
    $ayat = 1;
    foreach($data as $d){
            $str = mb_strtolower($d['arabic']);
        echo '<p class ="arabic">'. $str .' ﴿'.format_arabic_number($ayat).'﴾</p>';
        echo '<p class ="latin">'.'['.$ayat.'] '.$d['indonesia'] .'</p>';
        echo '<hr />';
        $ayat++;
    }
    echo '<p><a href="http://localhost/webquranpedia/alquran">Kembali ke Index</a></p>';
}
 
function database($sql){
    $db = new mysqli("localhost", "root", "", "quranpedia");
    if($db->connect_errno > 0){
            die('Unable to connect to database [' . $db->connect_error . ']');
    }
    $db->query("SET NAMES 'utf8'");
    $db->query('SET CHARACTER SET utf8');
 
    if(!$result = $db->query($sql)){
            die('There was an error running the query [' . $db->error . ']');
    }
       
    $return = array();
    while($row = $result->fetch_array()){
            $return[] = $row;
    }
    $result->free();
    $db->close();
    return $return;
}
 
function format_arabic_number($number){
    $arabic_number = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
    $jum_karakter = strlen($number);
    $temp = "";
    for($i = 0; $i < $jum_karakter; $i++){
        $char = substr($number, $i, 1);
        $temp .= $arabic_number[$char];
    }
    return '<span class="arabic_number">'.$temp.'</span>';
}
 
?>
</body>
</html>