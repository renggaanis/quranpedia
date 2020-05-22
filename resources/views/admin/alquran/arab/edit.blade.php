@extends('template_backend.home')
@section('sub-judul','Edit')
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

	<form action="{{ route('arab.update', $arab->id ) }}" method="POST">
	@csrf
	@method('patch')
	<div class="form-group">
		<label>Nama Surat (Hanya bisa diganti nama surat, maka ketikkan id surat. jika ingin mengedit nama surat silahkan ke menu daftar surat)</label>
		<input type="text" class="form-control" name="daftarsurat_id" value="{{ $arab->daftarsurat->id}}">
		<!-- value quran->name, agar pada form input terdapat data(nama)/ input nama arti tidak kosong  -->
	</div>
	<div class="form-group">
		<label>Ayat ke</label>
		<input type="text" class="form-control" name="VerseID" value="{{ $arab->VerseID}}">
		<!-- value quran->name, agar pada form input terdapat data(nama)/ input nama arti tidak kosong  -->
	</div>
	<div class="form-group">
		<label>Text Arab</label>
		<input type="text" class="form-control" name="AyahText" value="{{ $arab->AyahText}}">
		<!-- value quran->name, agar pada form input terdapat data(nama)/ input nama arti tidak kosong  -->
	</div>
	<div class="form-group">
		<label>Audio</label>
		<input type="file" class="form-control" name="audio" >
	</div>
	<div class="form-group">
		<button class="btn btn-primary btn-block">Update</button>
	</div>
	
	</form>
@endsection