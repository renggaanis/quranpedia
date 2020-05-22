@extends('template_backend.home')
@section('sub-judul','Laporan Total Post')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi kategori-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif

	<table id="table-datatables" class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr style="text-align: center">
				<th>No</th>
				<th>ID User</th>
				<th>Total Post</th>
			</tr> 
		</thead>
		<tbody>
			@foreach ($post as $result => $p)
			<tr style="text-align: center">
				<td>{{ $result + 1 }}</td>
				<td>{{ $p->users_id }}</td>
				<td>{{ $p->total }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

@endsection