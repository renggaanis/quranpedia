@extends('template_backend.home')
@section('sub-judul','Edit Daftar Surat')
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

	<form action="{{ route('daftarsurat.update', $daftarsurat-> index ) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Nama Surat (Indonesia)</label>
		<input type="text"  class="form-control" name="surat_indonesia" value= "{{ $daftarsurat->surat_indonesia }}" ></input>
	</div>
	<div class="form-group">
		<label>Nama Surat (Arab) </label>
		<input type="text" class="form-control" name="surat_arab" value="{{ $daftarsurat->surat_arab }}">
	</div>
	<div class="form-group">
		<label>Arti </label>
		<input type="text" class="form-control" name="arti" value="{{ $daftarsurat->arti }}">
	</div>
	<div class="form-group">
		<label>Jumlah Ayat </label>
		<input type="text" class="form-control" name="jumlah_ayat" value="{{ $daftarsurat->jumlah_ayat }}">
	</div>
	<div class="form-group">
		<label>Tempat Turun </label>
		<input type="text" class="form-control" name="tempat_turun" value="{{ $daftarsurat->tempat_turun }}">
	</div>
	<div class="form-group">
		<label>Urutan Pewahyuan</label>
		<input type="text" class="form-control" name="urutan_pewahyuan" value="{{ $daftarsurat->urutan_pewahyuan }}">
	</div>


	<div class="form-group">
		<button class="btn btn-primary btn-block">Update Data</button>
	</div>
	
	</form>
@endsection