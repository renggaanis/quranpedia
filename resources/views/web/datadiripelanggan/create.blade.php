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

	<form action="{{ route('pelanggan.store') }}" method="POST">
	@csrf
	<div class="form-group">
		<label>Username</label>
		<select class="form-control" name="id">
			<option value="" holder>Pilih Username</option>
			<option value="{{ auth()->user()->id }}">{{ auth()->user()->name }}</option>
			
		</select>
	</div>
	<div class="form-group">
		<label>Nama Depan</label>
		<input type="text" class="form-control" name="nama_depan">
	</div>
	<div class="form-group">
		<label>Nama Belakang</label>
		<input type="text" class="form-control" name="nama_belakang">
	</div>
	<div class="form-group">
		<select calss="form control" name="jenis_kelamin">
            <option>-Jenis Kelamin-</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat">
	</div>
	<div class="form-group">
		<label>No. Telp/Hp</label>
		<input type="text" class="form-control" name="no_telp">
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block">Simpan user</button>
	</div>
	
	</form>

</div>
@endsection