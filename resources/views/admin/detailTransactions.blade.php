@extends('layout.admin')

@section('content') 

 <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
      </div>

      <!-- Content Row -->
      <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr>
                        <th>nama pemesan</th>
                        <th>email</th>
                        <th>nomor handphone</th>
                        <th>produk yang dibeli</th>
                        <th>alamat pengiriman</th>
                        <th>kurir yang dipilih</th>
                        <th>metode pembayaran yang dipilih</th>
                        <th>harga total</th>
                        <th>status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>nama pemesan</th>
                        <th>email</th>
                        <th>nomor handphone</th>
                        <th>produk yang dibeli</th>
                        <th>alamat pengiriman</th>
                        <th>kurir yang dipilih</th>
                        <th>metode pembayaran yang dipilih</th>
                        <th>harga total</th>
                        <th>status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                      <tr>
                        <td>{{$detailTransactions -> name}}</td>
                        <td>{{$detailTransactions -> email}}</td>
                        <td>{{$detailTransactions -> no_hp}}</td>
                        <td>{{$detailTransactions -> produk}}</td>
                        <td>{{$detailTransactions -> alamatPengiriman}}</td>
                        <td>{{$detailTransactions -> kurir}}</td>
                        <td>{{$detailTransactions -> metodePembayaran}}</td>
                        <td>Rp. {{number_format($detailTransactions -> hargaTotal, 0)}}</td>
                        <td>{{$detailTransactions -> status}}</td>
                        <td>
                            <a href="/admin/buktiPembayaran/{{$detailTransactions -> id}}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-images"></i></a>
                            <a href="/admin/editStatus/{{$detailTransactions -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                            
                        </td>  
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    </div>
    <!-- /.container-fluid -->
    @endsection