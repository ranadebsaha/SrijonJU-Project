@extends('frontend.layouts.main')
@section('main-container')
<h2>Registration Form</h2>
<form class="needs-validation" method="post" action="{{url('/')}}/register">
    @csrf
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Name</label>
      <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="First name" required>
    </div>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Gender</label>
      <input type="text" class="form-control" id="validationCustom01" name="gender" placeholder="First name" required>
    </div>
    <div class="form-row">
    
      <label for="validationCustom01">DoB</label>
      <input type="date" class="form-control" id="validationCustom01" name="dob" placeholder="First name" required>
    </div>
    
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Email</label>
      <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Addrress</label>
      <input type="text" class="form-control" id="validationCustom01" name="address" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Mobile No</label>
        <input type="number" class="form-control" id="validationCustomUsername" name="contact_no" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="City" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" name="state" placeholder="State" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Country</label>
      <input type="text" class="form-control" id="validationCustom04" name="country" placeholder="State" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">Aadhar</label>
      <input type="number" class="form-control" id="validationCustom04" name="aadhar" placeholder="State" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">password</label>
      <input type="text" class="form-control" id="validationCustom04" name="password" placeholder="State" required>
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form>

@endsection