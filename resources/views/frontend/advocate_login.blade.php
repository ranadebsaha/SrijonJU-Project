@extends('frontend.layouts.main')
@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-container" id="loginForm">
                    <h2 class="text-center">Advocate Login</h2>
                    <form method="post" action="{{url('/')}}/login">
                    @csrf
                        <div class="form-group">
                            <label for="loginEmail">Email address</label>
                            <input type="email" name="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="password" class="form-control" name="password"  id="loginPassword" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <p class="toggle-form">Don't have an account? <a href="#" onclick="toggleForm()">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection