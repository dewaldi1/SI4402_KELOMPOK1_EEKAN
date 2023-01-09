@extends('style-navbar.style')
@section('konten')
<!-- breadcrumb -->
    <div class="container mt-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
           checkout
          </li>
        </ol>
      </nav>
    </div>
<!-- end breadcrumb -->

<!-- table list checkout -->
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                            <h2 class="h3 mb-3 text-black">Your Order</h2>
                            <div class="p-3 p-lg-5 border bg-white">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Product</th>
                                        <th>Harga</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td>{{$checkout -> name}} <strong class="mx-2">x</strong> 1</td>
                                            <td>Rp. {{number_format($checkout -> harga, 0)}} </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                            href="#collapsebank" role="button" aria-expanded="false"
                                            aria-controls="collapsebank">Direct Transfer</a></h3>

                                    <div class="collapse" id="collapsebank">
                                        <div class="py-2">
                                            <p class="mb-0">Pastikan anda mentransfer ke rekening bank kami selain yang
                                                telah kami berikan</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-3">
                                    <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                            href="#collapsecheque" role="button" aria-expanded="false"
                                            aria-controls="collapsecheque">Qris Method </a></h3>

                                    <div class="collapse" id="collapsecheque">
                                        <div class="py-2">
                                            <p class="mb-0">Pastikan anda menscan qr code dibawah untuk melakukan
                                                pembayaran yang diteruskan ke pembeli </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="border p-3 mb-5">
                                    <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse"
                                            href="#collapsepaypal" role="button" aria-expanded="false"
                                            aria-controls="collapsepaypal">Paylatter</a></h3>

                                    <div class="collapse" id="collapsepaypal">
                                        <div class="py-2">
                                            <p class="mb-0">Pastikan anda meneruskan pembayaran yang telah dilakukan ke
                                                aplikasi peminjaman anda</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                            <h2 class="h3 mt-3 text-black">Coupon Code</h2>
                            <div class="p-3 p-lg-5 border bg-white">

                                <label for="c_code" class="text-black mb-3">Enter your coupon code if you have
                                    one</label>
                                <div class="input-group w-75 couponcode-wrap">
                                    <input type="text" class="form-control me-2" id="c_code" placeholder="Coupon Code"
                                        aria-label="Coupon Code" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-black btn-sm" type="button"
                                            id="button-addon2">Apply</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <h2 class="h3 mb-3 text-black">Billing Details</h2>
                    <div class="p-3 p-lg-5 border bg-white">
                       <form action="/checkout" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="hidden" value="{{$checkout -> name}}" name="produk">
                            <input type="hidden" value="{{$checkout -> harga}}" name="hargaTotal">
                            <label class="form-label text-black" for="form2Example17">Nama lengkap <span class="text-danger">*</span></label>
                            <input
                                type="text"
                                id="form2Example17"
                                class="form-control"
                                placeholder="Silahkan masukan email..."
                                name="name"
                            />
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Email <span class="text-danger">*</span></label
                            >
                            <input
                                type="email"
                                id="form2Example17"
                                class="form-control"
                                placeholder="Silahkan masukan nama lengkap..."
                                name="email"
                            />
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Nomor handphone <span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                id="form2Example17"
                                class="form-control"
                                placeholder="Silahkan masukan nama lengkap..."
                                name="no_hp"
                            />
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Alamat pengriman <span class="text-danger">*</span></label
                            >
                            <input
                                type="text"
                                id="form2Example17"
                                class="form-control"
                                placeholder="Silahkan masukan alamat..."
                                name="alamatPengiriman"
                            />
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Pilih Kurir <span class="text-danger">*</span></label
                            >
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                name="kurir"
                            >
                                <option selected disabled value="">Silahkan pilih kurir</option>
                                <option value="Jne">Jne</option>
                                <option value="J&T">J&T</option>
                                <option value="Sicepat">Sicepat</option>
                            </select>
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Pilih Metode pembayaran <span class="text-danger">*</span></label
                            >
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                name="metodePembayaran"
                            >
                                <option selected disabled value="">Silahkan pilih metode pembayaran</option>
                                <option value="mandiri">Transfer mandiri (0898989888)</option>
                                <option value="Dana">Dana (087678676778)</option>
                                <option value="OVO">OVO (087678676778)</option>
                            </select>
                            </div>
                            <div class="form-outline mb-4">
                            <label class="form-label text-black" for="form2Example17"
                                >Bukti pembayaran <span class="text-danger">*</span></label
                            >
                            <input class="form-control" type="file" id="formFile" name="pembayaran" required>
                            </div>
                            <hr>
                        <div class="form-group">
                            <button class="btn btn-black btn-lg mt-3 btn-block" type="submit">Place Order</button>
                         </div>
                       </form>
                        
                    </div>
                </div>
            </div>
            <!-- </form> -->
        </div>
    </div>
<!-- end table list checkout -->


@endsection