@extends('frontend.content')

@section('isi')
<div class="col-md-8 hot-post-left">
@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	 

	<table class="table table-striped table-hover table-sm table-bordered" width="30%">
		<thead>
			<tr>
				<th width="10px">Nama user</th>
				<th width="15px">Email</th>
				<th width="10px">Avatar</th>
				<th width="5px">Action</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width="10px">{{ auth()->user()->name }}</td>
				<td width="15px">{{ auth()->user()->email }}</td>
				<td width="10px"><img src="{{ asset(auth()->user()->avatar) }}" class="img-fluid" style="width: 100px"></td>
				<td width="5px">
					<form action="" method="POST">
						@csrf
						@method('delete')
					<a href="{{ route('profile.edit', auth()->user()->id ) }}" class="btn btn-primary btn-sm">Edit</a>
				
					</form>
				</td>
			</tr>
		</tbody>
	</table>

	</div>
@endsection