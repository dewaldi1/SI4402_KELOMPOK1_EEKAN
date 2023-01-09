@extends('style-navbar.style')
@section('konten')

<!-- Start Hero Section -->
		<div class="hero pb-1">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-5">
						<div class="intro-excerpt pt-1"><br><br><br>
							<h1>Our Product <span>.</span></h1>
						</div>
					</div>
					<div class="col-lg-7">
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					@foreach($daftarProduk as $dp)
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="#">
							<img src="{{asset ('storage/foto/'.$dp -> gambar)}}" class="img-fluid product-thumbnail">
							<h3 class="product-title">{{$dp -> name}}</h3>
							<strong class="product-price">Rp. {{number_format($dp -> harga, 0)}}/Kg</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					@endforeach
					<!-- End Column 1 -->
						
					

		      	</div>
		    </div>
		</div>
		@endsection