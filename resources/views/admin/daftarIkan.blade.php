@extends('layout.admin')

@section('content') 
<!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Daftar ikan</h1>
           
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                  <a href="/admin/tambahIkan">
                    <button type="button" class="btn btn-primary">
                    Tambah Paket
                    </button>
                  </a>
                </h6>
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
                        <th>nama tangkapan</th>
                        <th>foto tangkapan</th>
                        <th>deskripsi</th>
                        <th>harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>nama ikan</th>
                        <th>foto ikan</th>
                        <th>deskripsi</th>
                        <th>harga</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>   
                     @foreach($listIkan as $li)
                      <tr>
                        <td>{{$li -> name}}</td>
                        <td><img src="{{asset ('storage/foto/'.$li -> gambar)}}" alt="" width="200px"></td>
                        <td><?php echo substr($li -> deskripsi,0,90)?>...</td>
                        <td>Rp. {{number_format($li -> harga, 0)}}</td>
                        <td>
                          <form action="hapusIkan/{{$li -> id}}" method="post">
                            <a href="/admin/editIkan/{{$li -> id}}"class="btn btn-warning btn-circle btn-sm button-edit"><i class="fas fa-edit"></i></a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
                          </form>
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