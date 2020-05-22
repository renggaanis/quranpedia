@extends('frontend.content')

@section('isi')
<div class="col-md-8 hot-post-left">

@if(count($errors)>0)
		@foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error}}
		</div>
		@endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<form action="{{ route('pelanggan.update', $pelanggan-> id) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Nama Depan</label>
		<input type="text" class="form-control" name="nama_depan" value="{{ $pelanggan->nama_depan }}">
	</div>
	<div class="form-group">
		<label>Nama Belakang</label>
		<input type="text" class="form-control" name="nama_belakang" value="{{ $pelanggan->nama_belakang }}">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" class="form-control" name="jenis_kelamin" value="{{ $pelanggan->jenis_kelamin }}">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" value="{{ $pelanggan->alamat }}">
	</div>
	<div class="form-group">
		<label>No. Telp/Hp</label>
		<input type="text" class="form-control" name="no_telp" value="{{ $pelanggan->no_telp }}">
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update Data</button>
	</div>
	
	</form>

</div>
@endsection