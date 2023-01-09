@extends('layout.admin')

@section('content')
    <!-- Begin Page Content -->
     <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Konfirmasi pembayaran</h1>
            <!-- insert form -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <a href="/admin/transaction"><button class="btn btn-primary">kembali</button></a>
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Konfirmasi pembayaran</label>
                      <select class="custom-select" name="status">
                        <option disabled selected value="">pilih status konfirmasi</option>
                        <option value="Pending" @if($editStatus -> status == "Pending") selected @endif>Pending</option>
                          <option value="Sedang diproses" @if($editStatus -> status == "Sedang diproses") selected @endif>Sedang diproses</option>
                          <option value="Sedang dikirim" @if($editStatus -> status == "Sedang dikirim") selected @endif>Sedang dikirim</option>
                          <option value="terkirim" @if($editStatus -> status == "terkirim") selected @endif>terkirim</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </div>
                  </form>               
                </div>
              </div>
            </div>
          </div>
    <!-- /.container-fluid -->
@endsection
