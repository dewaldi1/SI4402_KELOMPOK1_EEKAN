@extends('style-navbar.style')
@section('konten')
<div class="container mt-5">
    <h3 class="text-capitalize text-dark fw-bold mb-4">riwayat pemesanan mu</h3>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Produk yang dibeli</th>
            <th scope="col">Dibeli pada tanggal</th>
            <th scope="col">Alamat pengiriman</th>
            <th scope="col">Kurir</th>
            <th scope="col">Harga total</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riwayat as $r)
            <tr>
            <td>{{$r -> produk}}</td>
            <td>{{$r -> created_at}}</td>
            <td>{{$r -> alamatPengiriman}}</td>
            <td>{{$r -> kurir}}</td>
            <td>Rp. {{number_format($r -> hargaTotal, 0)}}</td>
            <td>{{$r -> status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection