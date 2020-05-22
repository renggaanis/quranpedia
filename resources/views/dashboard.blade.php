@extends('frontend.content')

@section('isi')
<div id="post-header" class="page-header">
		<div class="page-header-bg" style="
		 background-image: url('././public/assets/img/hom.jpg'); background-repeat: no-repeat;" 

		 data-stellar-background-ratio="0.5"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					
					<h1 style="">QURANPEDIA</h1>
				
					
				</div>
			</div>
		</div>
	</div>
	<br>
<div class="col-md-8 hot-post-left">

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/post1.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="http://localhost/webquranpedia/list-category/akhlak"></a>
							</div>
							<h3 class="post-title title-lg"><a href="http://localhost/webquranpedia/isi_post/kultum-quraish-shihab-tentang-melupakan-dan-sebaik-baiknya-memaafkan">Kultum Quraish Shihab "Tentang Melupakan dan Sebaik-baiknya Memaafkan"</a></h3>
							<ul class="post-meta">
								<li>20 Mei 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="http://localhost/webquranpedia/login"><img style="height: 250px" src="{{ asset('public/frontend/img/post2.png') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="http://localhost/webquranpedia/list-category/amal">Amal</a>
							</div>
							<h3 class="post-title"><a href="http://localhost/webquranpedia/isi_post/pendidikan-anak-tanggung-jawab-siapa">Pendidikan Anak, Tanggung Jawab Siapa?</a></h3>
							<ul class="post-meta">
								<li>20 Mei 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="http://localhost/webquranpedia/login"><img style="height: 250px" src="{{ asset('public/frontend/img/post3.jpg') }}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="http://localhost/webquranpedia/list-category/jihad">JIHAD</a>
							</div>
							<h3 class="post-title"><a href="http://localhost/webquranpedia/login">JIHAD, AMALAN YANG PALING UTAMA.</a></h3>
							<ul class="post-meta">
								<li>20 Mei 2020</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="{{ asset('public/frontend/img/ad-2.jpg') }}" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
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
								<h2 class="title">Postingan Terbaru</h2>
							</div>
						</div>
						<!-- post -->
						@foreach($data as $post_terbaru)
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{ route('web.isi', $post_terbaru->slug ) }}"><img style="height: 200px" src="{{ $post_terbaru->gambar}}" alt="" style="width: 300px"></a>
								<div class="post-body">
									<div class="post-category">
										<a href="#">{{ $post_terbaru->category->name }}</a>
									</div>
									<h3 class="post-title"><a href="#">{{ $post_terbaru->judul }}</a></h3>
									<ul class="post-meta">
										<li><a href="#"> {{ $post_terbaru->users->name }}</a></li>
										<li>{{ $post_terbaru->created_at->diffForHumans() }}</li>
									</ul>
								</div>
							</div>
						</div>
						@endforeach
						<!-- /post -->

					</div>
					<!-- /row -->

				</div>
		

		

@endsection