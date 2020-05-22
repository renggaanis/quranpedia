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
  	<div class="col-md-6 col-md-push-6">
                        <a href="/webquranpedia/dashboard" class="logo"><img style="width:300px" src="../public/frontend/img/header1.png" alt=""></a>
              <br>
        <img style="width: 200px" src="{{ asset('public/assets/img/logo-gopay.jpg') }}" alt="">
        
        <br>
        <small>Pelanggan yang bermurah hati, alangkah baiknya jika anda berdonasi terlebih dahulu<br> donasi anda kami perlukan untuk pengembangan website </small>
        <br><br>

	@if(count($errors)>0) <!-- jika error validasi ada, maka dilakukan foreach-->
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error}}
			<!-- ini error apabila kolom tidak diisikan atau kurang dari tiga -->
		</div>
		@endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<form action="{{ route('donasi.store') }}" method="POST">
	@csrf
	<div class="form-group" style="">
        <label>  Username</label>
        <select  style="width: 500px" class="form-control" name="id">
            <option value="" holder>Username</option><br>
            <option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>  
        </select>
    </div>
	<div class="form-group">
		<label>  akun gopay</label>
		<input style="width: 500px" type="text" class="form-control" name="akun_gopay">
		<!-- name disini sesuai dengan field name pada tabel kategori -->
	</div>
	<div class="form-group">
		<label>Jumlah Donasi</label>
		<input style="width: 500px" type="text" class="form-control" name="jumlah_donasi">
		<!-- name disini sesuai dengan field name pada tabel kategori -->
	</div>
	<small id="" class=""> Terima kasih atas kemurahan hati anda</small>
        <br><br>
	<div class="form-group">
		<button style="width: 500px" class="btn btn-primary btn-block">kirim donasi</button>
	</div>
	
	</form>
