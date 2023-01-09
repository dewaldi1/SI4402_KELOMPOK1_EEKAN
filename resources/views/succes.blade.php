	@extends('style-navbar.style')
		@section('konten')
<main>
    <div class="section-success d-flex align-items-center mt-5">
      <div class="col text-center">
        <img src="{{ url('/images/ic_mail.png') }}" alt="halaman sukses">
        <h1>Yay! Success</h1>
        <p class="font-weight-normal" style="color: #000;">
          Mohon ditunggu untuk konfirmasi
          <br />
          pesanan mu sedang dikirim
        </p>
        <a href="/" class="btn btn-info mb-3">
         <i class="fa fa-home mr-2" aria-hidden="true"></i> Kembali ke home
        </a>
      </div>
    </div>
  </main>
        @endsection