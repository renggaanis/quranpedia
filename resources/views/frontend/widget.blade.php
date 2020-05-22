	<div class="col-md-4">
		<br>
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img data-toggle="modal" data-target="#exampleModal" class="img-responsive" src="{{ asset('public/frontend/img/ad-3.jpg') }}" alt="">
						</a>
					</div>
					<!-- /ad widget --> 
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  						<div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">IKLAN</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <p>Untuk informasi mengenai pemasangan iklan, silahkan hubungi admin terlebih dahulu ke email fierre@gmail.com</p>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         </div>
                       </div>
                     </div>
                   </div>
					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								@foreach($category_widget as $hasil)
								<li><a href="{{ route('web.category', $hasil->slug)}}">{{ $hasil->name }}<span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- post widget -->
					<div class="aside-widget">
						<!-- <div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div> -->
						<!-- post -->
						<!-- <div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/widget-3.jpg') }}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
							</div>
						</div> -->
						<!-- /post -->

						<!-- post -->
						<!-- <div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/widget-2.jpg') }}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Technology</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
							</div>
						</div> -->
						<!-- /post -->

						<!-- post -->
						<!-- <div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/widget-4.jpg')}}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
							</div>
						</div> -->
						<!-- /post -->

						<!-- post -->
						<!-- <div class="post post-widget">
							<a class="post-img" href="blog-post.html"><img src="{{ asset('public/frontend/img/widget-5.jpg') }}" alt=""></a>
							<div class="post-body">
								<div class="post-category">
									<a href="category.html">Health</a>
									<a href="category.html">Lifestyle</a>
								</div>
								<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
							</div>
						</div> -->
						<!-- /post -->


					</div>
					<!-- /post widget -->
				</div>
				<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ad -->
				<div class="col-md-12 section-row text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img data-toggle="modal" data-target="#exampleModal"  class="img-responsive" src="{{ asset('public/frontend/img/ad-2.jpg') }}" alt="">
					</a>
				</div>
				<!-- /ad -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->