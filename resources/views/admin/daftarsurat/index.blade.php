@extends('template_backend.home')
@section('sub-judul','Informasi Surah')
<!-- penerapan dari yield sub-judul. sehingga nanti sub judulnya menjadi Daftar Surat-->
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
		{{ Session('success') }}
		</div>
	@endif
	
	

	<table class="table table-striped table-hover table-sm table-bordered">
		<thead><tr><th>No</th>
				<th>Nama Surat (Indonesia)</th>
				<th>Nama Surat (Arab)</th>
				<th>Arti</th>
				<th>Jumlah Ayat</th>
				<th>Tempat Turun</th>
				<th>Urutan Pewahyuan</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($daftarsurat as $result => $hasil)
			<tr>
				<td>{{ $hasil->index }}</td>
				<td type="action">{{ $hasil->surat_indonesia }}</a></td>
				<td style="font-family: 'Uthmani';text-align: right; font-size: 20px ">{{ $hasil->surat_arab }}</td>
				<td>{{ $hasil->arti }}</td>
				<td>{{ $hasil->jumlah_ayat }}</td>
				<td>{{ $hasil->tempat_turun }}</td>
				<td>{{ $hasil->urutan_pewahyuan }}</td>
				<td>
					<form action="" method="POST">
					<a href="{{ route('daftarsurat.edit', $hasil->index ) }}" class="btn btn-primary btn-sm">Edit</a>
					</form>
				</td>
			</tr>
			@endforeach		
						
		</tbody>
	</table>
	{{ $daftarsurat->links() }}
	<!-- "links" untuk menampilkan paginate, jadi nanti data category ditampilkan sekian data sesuai paginate pada category conroller -->
@endsection