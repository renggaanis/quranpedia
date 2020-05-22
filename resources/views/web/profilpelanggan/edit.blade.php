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

	<form action="{{ route('profile.update', $user->id ) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	<div class="form-group">
		<label>name</label>
		<input type="text" class="form-control" name="name" value="{{ $user->name }}">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="{{ $user->email }}">
	</div>
	<div class="form-group">
		<label>Avatar</label>
		<input type="file" class="form-control" name="avatar">
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Update profile</button>
	</div>
	
	</form>

	</div>
@endsection