@extends('template_backend.home')
@section('sub-judul','Profile')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	<a href="http://localhost/webquranpedia/profilebackend" class="btn btn-info btn-sm">Lihat Profil</a>
	<br><br>
	<ul><b>Username : {{ auth()->user()->name }}</ul>
	<ul><b>Email : {{ auth()->user()->email }}</ul>
	<ul><b>Avatar :<br><img src="{{ asset(auth()->user()->avatar) }}" class="img-fluid" style="width: 100px"></ul>
<br>
					<form action="" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('profil.edit', auth()->user()->id ) }}" class="btn btn-primary btn-sm">Edit Profile</a>
	

@endsection