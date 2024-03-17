@extends('frontend.layouts.main')
@section('main-container')
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-container" id="registrationForm">
                    <h2 class="text-center">Advocate Register</h2>
                    <form method="post" action="{{url('/advocate_register')}}">
                    @csrf
                        <div class="form-group">
                            <label for="registerName">Full name</label>
                            <input type="text" name="name" class="form-control" id="registerName" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPhone">Phone number</label>
                            <input type="number" name="contact_no"class="form-control" id="registerPhone"
                                placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email address</label>
                            <input type="email" name="email" class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="register">Address</label>
                            <input type="text" name="address" class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                placeholder="Enter address" required>
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
                            <label for="registerState">State</label>
                            <select class="form-select" name="state" id="stateSelect" aria-label="Select Indian state" required>
                                <option selected>Select State</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Goa">Goa</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registerCountry">Country</label>
                            <select class="form-select" name="country" id="stateCountry" aria-label="Select country" required>
                                <option selected>Select Country</option>
                                <option value="India">India</option>
                                <option value="Canada">Canada</option>
                                <option value="Japan">Japan</option>
                                <option value="Italy">Italy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registerCity">Gender</label>
                            <select class="form-select" name="gender" id="genderSelect" aria-label="Select gender" required>
                                <option selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dateofBirth">DOB</label>
                            <input type="date" name="dob" class="form-control" id="validationCustom01" name="dob" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Password"
                                required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    @endsection