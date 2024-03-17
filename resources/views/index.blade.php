@extends('frontend.layouts.main')
@section('main-container')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Lawyer</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="{{url('/register')}}">Find A Lawyer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/advocate_register')}}">Legal Advice</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">IPC Section</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/advocate_login')}}">Lawyer Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/login')}}">Customer Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
				<div class="carousel-caption">
					<h5>"Positivity is the fuel for resilience. Keep your spirits high."</h5>
					<p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
				<div class="carousel-caption">
					<h5>"You are the architect of your destiny; paint it with vibrant colors."</h5>
					<p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="https://images.unsplash.com/photo-1568092806323-8ec13dfa9b92?q=80&w=2874&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="">
				<div class="carousel-caption">
					<h5>"Even in the stormiest of seas, you can find your anchor of hope."</h5>
					<p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!-- About Section-->
	<section id="about" class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<div class="about-img">
						<img src="" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>We Provide Best Quality <br> Services Ever</h2>
						<p>Our Website is used to help people to understand about law related informations.</p>
						<a href="#" class="btn btn-warning">Learn More</a>
					</div>
					<img src="https://images.unsplash.com/photo-1568992688065-536aad8a12f6?q=80&w=2832&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section-->
	<section id="services" class="services section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Servicse</h2>
						<p>Our Website is used to help people to understand about law related informations.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-subtract"></i>
							<h3 class="card-title">Best Quality</h3>
							<p class="lead">Our Website is used to help people to understand about law related
								informations.</p>
							<button class="btn btn-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-slack"></i>
							<h3 class="card-title">Sustainability</h3>
							<p class="lead">Our Website is used to help people to understand about law related
								informations.</p>
							<button class="btn btn-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-playstation"></i>
							<h3 class="card-title">Integrity</h3>
							<p class="lead">Our Website is used to help people to understand about law related
								informations.</p>
							<button class="btn btn-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Team Section-->
	<section id="team" class="team section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Servicse</h2>
						<p>Our Website is used to help people to understand about law related informations.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card text-center">
						<div class="card-body">
							<img src="" alt="" class="img-fluid rounded-circle">
							<h3 class="card-title py-2">Ranadeb Saha</h3>
							<p>University Institude of Technology, BU</p>
							<p class="socials">
								<i class="bi bi-twitter text-dark mx-1"></i>
								<i class="bi bi-facebook text-dark mx-1"></i>
								<i class="bi bi-linkedin text-dark mx-1"></i>
								<i class="bi bi-instagram text-dark mx-1"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card text-center">
						<div class="card-body">
							<img src="" alt="" class="img-fluid rounded-circle">
							<h3 class="card-title py-2">Tuman Sutradhar</h3>
							<p>University Institude of Technology, BU</p>
							<p class="socials">
								<i class="bi bi-twitter text-dark mx-1"></i>
								<i class="bi bi-facebook text-dark mx-1"></i>
								<i class="bi bi-linkedin text-dark mx-1"></i>
								<i class="bi bi-instagram text-dark mx-1"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card text-center">
						<div class="card-body">
							<img src="" alt="" class="img-fluid rounded-circle">
							<h3 class="card-title py-2">Adarsha Bairagi</h3>
							<p>Future Institude of Engineering and Management</p>
							<p class="socials">
								<i class="bi bi-twitter text-dark mx-1"></i>
								<i class="bi bi-facebook text-dark mx-1"></i>
								<i class="bi bi-linkedin text-dark mx-1"></i>
								<i class="bi bi-instagram text-dark mx-1"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card text-center">
						<div class="card-body">
							<img src="" alt="" class="img-fluid rounded-circle">
							<h3 class="card-title py-2">Sarnojit Naskar</h3>
							<p>St. Thomas' College of Engineering and Technology</p>
							<p class="socials">
								<i class="bi bi-twitter text-dark mx-1"></i>
								<i class="bi bi-facebook text-dark mx-1"></i>
								<i class="bi bi-linkedin text-dark mx-1"></i>
								<i class="bi bi-instagram text-dark mx-1"></i>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact Section-->
	<section id="contact" class="contact section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Contact Us</h2>
					</div>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-12 p-o pt-4 p-4 pb-4">
					<form action="#" class="bg-light p-4.m-auto">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<input type="text" class="form-control" required placeholder="Your Full Name">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<input type="email" class="form-control" required placeholder="Your Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<textarea rows="3" required class="form-control"
										placeholder="Your Query"></textarea>
								</div>
							</div>
							<button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

@endsection