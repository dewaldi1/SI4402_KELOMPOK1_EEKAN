@extends('layout.admin')

@section('content') 
<!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <a href="/admin/transaction">
                <button type="button" class="btn btn-primary mb-4">
                Kembali
                </button>
            </a>
           
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header">
                <h1 class="h3 font-weight-normal text-dark mt-3">Bukti Pembayaran</h1>
                <p>atas nama : <span class="text-dark font-weight-bold">{{$buktiPembayaran -> name}}</span>
                <br>
                Produk yang dibeli : <span class="text-dark font-weight-bold">{{$buktiPembayaran -> produk}}</span>
                </p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="col-md-4">
                    <img src="{{ asset ('storage/images/'.$buktiPembayaran -> pembayaran) }}" alt="foto pembayaran" width="200px">
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- end of begin content -->
@endsection