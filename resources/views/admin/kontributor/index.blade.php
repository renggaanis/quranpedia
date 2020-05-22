@extends('template_backend.home')
@section('sub-judul','Kontributor')
@section('content')

	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Biodata Anda</h2>
							</div>
						</div>
                        <div class="card-body p-0">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                            {{ Session('success') }}
                            </div>
                        @endif
                        <div class="form-group">
                            <a class="btn btn-primary" href="{{ route('kontributor.create') }}">Lengkapi Biodata Anda</a>
                        </div>

                        @foreach($kontributor as $k)
                        <form action="" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <!-- @method('PATCH') -->
                        <div class="form-group">
                        <input type="hidden" name="id" value="{{ $k->id }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Depan</label>
                            <input type="text" class="form-control" name="nama_depan" value="{{ $k->nama_depan }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Belakang</label>
                            <input type="text" class="form-control" name="nama_belakang" value="{{ $k->nama_belakang }}">
                        </div>
                        <div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat" value="{{ $k->alamat }}">
						</div>
						<div>
                            <label>Jenis Kelamin</label>
                            </br>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $k->jenis_kelamin }}">
                        </div>
						<div class="form-group">
							<label>No. Ktp</label>
							<input type="text" class="form-control" name="no_ktp" value="{{ $k->no_ktp }}">
						</div>
						<div class="form-group">
							<label>No. Telp/Hp</label>
							<input type="text" class="form-control" name="no_telp" value="{{ $k->no_telp }}">
						</div>
                        <div class="form-group">
                            <a class="btn btn-info" href="{{ route('kontributor.edit', auth()->user()->id ) }}">Edit Biodata</a>
                        </div>
                        </form>
                        @endforeach
                        
					</div>







@endsection
