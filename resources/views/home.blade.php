@extends('style-navbar.style')
@section('konten')

		<!-- Start Hero Section -->
			<div class="hero" >
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="images/ikan_home.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1>Kebaikan Laut <span class="d-block">Sampai Dapur Anda</span></h1>
						<p class="mb-4" style="color:white"> Kami selalu menjaga kualitas produk demi sajian terbaik Anda</p>
						<p><a href="shop.php" class="btn btn-secondary me-2">Shop Now</a><a href="/about" class="btn btn-white-outline">Explore</a></p>
					</div>
				</div>
			</div>

		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">
					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Kesegaran terbaik dari nelayan kami </h2>
						<p class="mb-4">Kami selalu mementingkan mutu dan kualitas sampai meja makan anda</p>
						<p><a href="shop.php" class="btn">Explore</a></p>
					</div> 
					<!-- End Column 1 -->


					<!-- Start Column 1 -->
					@foreach($daftarProduk as $dp)
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="/detail/{{$dp -> id}}">
							<img src="{{asset ('storage/foto/'.$dp -> gambar)}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$dp -> name}}</h3>
							<strong class="product-price">Rp. {{number_format($dp -> harga, 0)}}/Kg</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->
					@endforeach
				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Kami selalu memastikam kesegaran produk yang kami kirimkan dapat sajian terbaik di meja makan anda </p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast Shipping</h3>
									<p>Kami selalu memastikan kecepatan pengiriman untuk memberikan kesegaran terbaik sampai tangan anda </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Lots of Choices</h3>
									<p>Banyaknya pilihan produk untuk ragam meja makan anda </p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Kami selalu ada untuk segala pertanyaan dan keluhan anda</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>freshness Overcome</h3>
									<p>Kami selalu menjamin kesegaran prduk kami dengan pengiriman cepat kami </p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/about--us.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/nelayan-1.jfif" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/nelayan-2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/nelayan-3.jpeg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">eekan membantu nelayan indonesia mendapatkan perannya</h2>
						<p>Setiap pembelian produk anda, anda sudah berpartisipasi dalam upaya menaikan kesejateraan ekonomi masyarakat pesisir  </p>

						<p><a herf="#" class="btn">Explore</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Dengan adanya eekan saya bisa memberikan sajian terbaik untuk keluarga saya, mementingkan gizi untuk tumbuh kembang mereka &rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/smile.jpg" alt="Miswanda" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Miswanda</h3>
													<span class="position d-block mb-3">Ibu Rumah Tangga.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;eekan membantu saya dalam memenuhi kebutuhan bahan masakan restoran saya, kesegaran dan pengiriman yang cepat menjadi salah satu faktor utama saya berlanggana di eekan&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person_2.jpg" alt="Junaedi" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Junaedi</h3>
													<span class="position d-block mb-3">Pemilik restoran Bahagia</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Dengan adanya eekan saya bisa membantu masyarkat agar dapat mengkonsumsi makanan sehat demi menjaga pola hidup sehat &rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/senyum.png" alt="Mahmudi" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Mahmudi</h3>
													<span class="position d-block mb-3">Pendiri gerakan hidup sehat </span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Berita Pesisir </h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/nelayan-2.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">eekan memberikan bantuan 800jt untuk masyarakat Tanjung Pasir</a></h3>
								<div class="meta">
									<span>by <a href="#">Najwa Shihab</a></span> <span>on <a href="#">November 19, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/nelayan-5.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">23 daerah pesisir turut berpartisipasi dalam program kampung nelayan eekan </a></h3>
								<div class="meta">
									<span>by <a href="#">Farrah Adimitya</a></span> <span>on <a href="#">Januari 15, 2022</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/nelayan-4.jpeg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">eekan berhasil menumbuhkan sektor perikanan hingga 35% ditahun 2021</a></h3>
								<div class="meta">
									<span>by <a href="#">Detik.com</a></span> <span>on <a href="#">Agustus 19, 2022</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Blog Section -->	
		<!-- maps -->
		<div class="container">
			@include('layout.maps')
		</div>
				
		<!-- end maps -->
	</body>

</html>
@endsection