@extends('template_backend.home')
@section('sub-judul','Tambah pelanggan')
@section('content')

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

	<form action="{{ route('pelanggan.store') }}" method="POST">
		<!-- pelanggan.store adalah route untuk melakukan penyimpanan, dan nanti ketika di klik simpan pelanggan maka akan diarahkan ke pelanggan store sesuai dengan function store pada controllers-->
		<!-- method post digunakan untuk mengirimkan data -->
	@csrf
	<!-- csrf  untuk keamanan -->
	<!-- jika tidak disertakan, maka laravel akan memberikan error -->
	<div class="form-group">
		<label>nama depan</label>
		<input type="text" class="form-control" name="nama_depan">
		<!-- name disini sesuai dengan field name pada tabel pelanggan -->
	</div>
	<div class="form-group">
		<label>nama_belakang</label>
		<input type="text" class="form-control" name="nama_belakang">
		<!-- name disini sesuai dengan field name pada tabel pelanggan -->
	</div>
	<div class="form-group">
		<label>jenis kelamin</label>
		<input type="text" class="form-control" name="jenis_kelamin">
		<!-- name disini sesuai dengan field name pada tabel pelanggan -->
	</div>
	<div class="form-group">
		<label>alamat</label>
		<input type="text" class="form-control" name="alamat">
		<!-- name disini sesuai dengan field name pada tabel pelanggan -->
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan pelanggan</button>
	</div>
	
	</form>
@endsection