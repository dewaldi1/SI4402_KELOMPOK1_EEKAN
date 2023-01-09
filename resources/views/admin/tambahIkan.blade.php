@extends('layout.admin')

@section('content')
<!-- Begin Page Content -->
          <div class="container-fluid">
           
            <!-- insert form -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  Tambah ikan hasil tangkapan
                </h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <form enctype="multipart/form-data" method="POST" action="" class="form-input" >
                    @csrf
                    <div class="mb-3">
                      <label for="inputNamaMobil" class="form-label">Nama tangkapan</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="masukan nama tangkapan..."
                        name="name"
                        required
                      />
                    </div>
                    <div class="mb-3">
                      <label for="formFile" class="form-label">Foto hasil tangkapan</label>
                      <input type="file" class="form-control-file" name="gambar" />
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" required></textarea>
                    </div>
                    </div>
                    <div class="mb-3">
                      <label for="inputMerk" class="form-label">harga</label>
                      <input
                        type="number"
                        class="form-control"
                        placeholder="Masukan harga..."
                        name="harga"
                        required
                      />
                    </div>
                    
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Selesai</button>
                    </div>
                  </form>               
                </div>
              </div>
            </div>
          </div>
<!-- end of begin page content -->
@endsection