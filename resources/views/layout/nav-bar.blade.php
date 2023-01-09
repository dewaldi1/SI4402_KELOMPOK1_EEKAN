
		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="/home">eekan<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item">
							<a class="nav-link @yield('home')" href="/">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @yield('shop')" href="/shop">shop</a>
						</li>
						<li class="nav-item"><a class="nav-link @yield('about')" href="/about">About us</a></li>
						<li class="nav-item"><a class="nav-link @yield('services')" href="services.php">Services</a></li>
						<li class="nav-item"><a class="nav-link @yield('blog')" href="blog.php">Blog</a></li>
						<li class="nav-item"><a class="nav-link @yield('contact')" href="contact.php">Contact us</a></li>
					</ul>
					@guest
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link @yield('login')" href="/login"><img src="{{ url('/images/user.svg') }}" class="me-3">Login</a></li>
					</ul>
					@endguest
					@auth
					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ url('/images/user.svg') }}">
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
							<li><a class="dropdown-item @yield('riwayat')" href="/riwayat">riwayat pemesanan</a></li>
							<li><a class="dropdown-item @yield('login')" href="/logout">Logout</a></li>
						</ul>
					</div>
						<li><a class="nav-link" href="#cart"><img src="{{ url('/images/cart.svg') }}"></a></li>
					</ul>
					@endauth
				</div>
			</div>
				
		</nav>
		
        <!-- end nav-bar -->
        