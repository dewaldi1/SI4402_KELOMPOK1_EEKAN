@extends('style-navbar.style')
@section('konten')

<!-- breadcrumb -->
    <div class="container mt-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Details ikan
          </li>
        </ol>
      </nav>
    </div>
<!-- end breadcrumb -->

    <!-- deskripsi produk -->
    <div class="container mt-3 detailProduk">
      <div class="row">
        <div class="col-sm-6">
          <img src="{{asset ('storage/foto/'.$detailIkan -> gambar)}}" alt="" width="500px">
          
        </div>
        <div class="col-sm-5">
          <h1 class="text-dark mb-4">
            Detail produk
          </h1> 
          <hr />
          <h3 class="text-capitalize text-dark mb-3">{{$detailIkan -> name}} - Rp. {{number_format($detailIkan -> harga, 0)}}/Kg</h3>
            <p>
              {{$detailIkan -> deskripsi}}
            </p>
          @guest
          <a href="/login"
            ><button class="btn btn-warning btn-keranjang" type="submit">
              Anda belum login
            </button></a
          >
          @endguest
          @auth
          <a href="/checkout/{{$detailIkan -> id}}"
            ><button class="btn btn-warning btn-keranjang" type="submit">
              Tambah ke Keranjang!
            </button></a
          >
          @endauth
        </div>
      </div>
    </div>
    <!-- end deskripsi produk -->

    <!-- rekomendasi produk lain -->
    <div class="otherRecommendation mt-5">
      <div class="container">
        <h1 class="titleRecommendation text-capitalize fw-bold mb-4">
          Rekomendasi tangkapan lainnya
        </h1>
        <div class="row">
            @foreach($listIkan as $li)
          <div class="col-12 col-md-4 col-lg-3 mb-5">
				<a class="product-item" href="/detail/{{$li -> id}}" style="text-decoration: none;">
					<img src="{{asset ('storage/foto/'.$li -> gambar)}}" class="img-fluid product-thumbnail">
					<h3 class="product-title mt-3">{{$li -> name}}</h3>
					<strong class="product-price">Rp. {{number_format($li -> harga, 0)}}/Kg</strong>
				</a>
			</div> 
          @endforeach
      </div>
    </div>
    <!-- end rekoemndasi produk lain -->

@endsection