@extends('template_backend.home')
@section('sub-judul','Tambah user')
@section('content')

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

	<form action="{{ route('kontributor.update', $kontributor-> id) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Nama Depan</label>
		<input type="text" class="form-control" name="nama_depan" value="{{ $kontributor->nama_depan }}">
	</div>
	<div class="form-group">
		<label>Nama Belakang</label>
		<input type="text" class="form-control" name="nama_belakang" value="{{ $kontributor->nama_belakang }}">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" name="alamat" value="{{ $kontributor->alamat }}">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label><br>
         <select calss="form control" name="jenis_kelamin">
              <option>Jnis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
          </select>
    </div>
	<div class="form-group">
		<label>No. Ktp</label>
		<input type="text" class="form-control" name="no_ktp" value="{{ $kontributor->no_ktp }}">
	</div>
	<div class="form-group">
		<label>No. Telp/Hp</label>
		<input type="text" class="form-control" name="no_telp" value="{{ $kontributor->no_telp }}">
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update Data</button>
	</div>
	
	</form>
@endsection