@extends('frontend.layouts.main')
@section('main-container')
		<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-light fixed-top">
  			<div class="container-fluid">
    			<a class="navbar-brand" href="#"><span class="text-warning">Team</span> Power</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="navbarSupportedContent">
      				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        				<li class="nav-item">
          					<a class="nav-link" href="#home">Home</a>
        				</li>
						<li class="nav-item">
          					<a class="nav-link" href="#about">About</a>
        				</li>
						<li class="nav-item">
          					<a class="nav-link" href="#services">Services</a>
        				</li>
						<li class="nav-item">
          					<a class="nav-link" href="#team">Team</a>
        				</li>
						<li class="nav-item">
          					<a class="nav-link" href="#contact">Contact Us</a>
        				</li>
      				</ul>
    			</div>
  			</div>
		</nav>
		<h1 style="margin-top: 5%; display: flex; justify-content: center;">Complete Your Profile</h1>	
        <div class="detail">
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
@endsection

