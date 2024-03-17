@extends('frontend.layouts.main')
@section('main-container')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-container" id="loginForm">
                    <h2 class="text-center">Login</h2>
                    <form method="post" action="{{url('/')}}/register">
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
                <div class="form-container" id="registrationForm" style="display: none;">
                    <h2 class="text-center">Register</h2>
                    <form>
                        <div class="form-group">
                            <label for="registerName">Full name</label>
                            <input type="text" class="form-control" name="name" id="registerName" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPhone">Phone number</label>
                            <input type="number" class="form-control" id="registerPhone" name="contact_no" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email address</label>
                            <input type="email" class="form-control" id="registerEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="registerCity">City</label>
                            <select class="form-select" name="city" id="citySelect" aria-label="Select Indian city" required>
                                <option selected>Select City</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Kolkata">Kolkata</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                        <p class="toggle-form">Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection