<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Webpage !</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="shortcut icon" type="image" href="">
    
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>eekan find ur freshness </title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
  </head>

  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">
  
          <div class="px-5 ms-xl-4">
            <i class="fas fa-fish fa-2x me-3 pt-5 mt-xl-4" style="color: #083AA9;"></i>
            <span class="h1 fw-bold mb-0">eekan.</span>
          </div>
  
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
  
           <form method="POST" action="">
                  @csrf
                    <div class="form-outline mb-4">
                      <input type="text" id="form2Example18" class="form-control form-control-lg" name="name" required/>
                      <label class="form-label" for="form2Example18">Nama lengkap</label>
                    </div>
        
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example28" class="form-control form-control-lg" name="email" required/>
                      <label class="form-label" for="form2Example28">Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" required/>
                      <label class="form-label" for="form2Example28">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example28" class="form-control form-control-lg" name="password_confirmation" required/>
                      <label class="form-label" for="form2Example28">Konfirmasi password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <h6 class="forRegister fw-light mt-3">Anda sudah punya akun? <a href="/login">Login</a></h6>
                </form>
  
          </div>
  
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/login.jpg
          "
            alt="Login image" class="w-100 h-100" style="object-fit: cover; object-position: left;">
        </div>
      </div>
    </div>
  </section>