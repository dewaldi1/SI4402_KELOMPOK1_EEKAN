@extends('layout.admin')

@section('content') 
<!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Daftar transaksi</h1>
           
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
              </div>
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
                        <th>produk yang dibeli</th>
                        <th>alamat pengiriman</th>
                        <th>harga total</th>
                        <th>status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>nama pemesan</th>
                        <th>produk yang dibeli</th>
                        <th>alamat pengiriman</th>
                        <th>harga total</th>
                        <th>status</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                     @foreach($listTransactions as $lt)
                      <tr>
                        <td>{{$lt -> name}}</td>
                        <td>{{$lt -> produk}}</td>
                        <td>{{$lt -> alamatPengiriman}}</td>
                        <td>Rp. {{number_format($lt -> hargaTotal, 0)}}</td>
                        <td>{{$lt -> status}}</td>
                        <td>
                            <a href="/admin/detailTransactions/{{$lt -> id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="/admin/buktiPembayaran/{{$lt -> id}}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-images"></i></a>
                            <a href="/admin/editStatus/{{$lt -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                        </td>  
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
<!-- end of begin content -->
@endsection