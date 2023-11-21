@extends('layouts.auth')

@section('style')
 <style>
  .background-radial-gradient {
    background-color: hsl(218, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(218, 41%, 35%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%),
      radial-gradient(1250px circle at 100% 100%,
        hsl(218, 41%, 45%) 15%,
        hsl(218, 41%, 30%) 35%,
        hsl(218, 41%, 20%) 75%,
        hsl(218, 41%, 19%) 80%,
        transparent 100%);
  }

  #radius-shape-1 {
    height: 220px;
    width: 220px;
    top: -60px;
    left: -130px;
    background: radial-gradient(#ff9e1f, #ff9e1f);
    overflow: hidden;
  }

  #radius-shape-2 {
    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
    bottom: -60px;
    right: -110px;
    width: 300px;
    height: 300px;
    background: radial-gradient(#ff9e1f, #ff9e1f);
    overflow: hidden;
  }

  .bg-glass {
    background-color: hsla(0, 0%, 100%, 0.9) !important;
    backdrop-filter: saturate(200%) blur(25px);
  }
  .navbar-light{
    background-color: #ffefcc !important;
  }
  .navbar {
    box-shadow: 0 2px 12px 0 rgb(255 255 255 / 16%) !important;
  }
</style>
@endsection


@section('content')
<main class="main-content  mt-0">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
      <!-- Container wrapper -->
      <div class="container">
        
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="{{ asset('assets/img/merchant_logo.png') }}"
            height="50"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
          <!-- Icon -->
          <a class="text-reset me-3" href="{{ url('login') }}">
            <button class="btn bg-gradient-dark">Login</button>
          </a>
          
        </div>
        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
  
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-6 fw-bold ls-tight" style="color: hsl(178deg 86% 14%)">
            Simplify buying experience for your customers, <br />
            <span style="color: hsl(34deg 100% 56%)">that encourage and makes easy to do business with you.</span>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
          <div class="card bg-glass">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign Up</h4>
              </div>
            </div>
            <div class="card-body px-4 py-5 px-md-5">
              <form role="form" id="signup_form" class="text-start" method="POST" action="{{ url('signup') }}">
                  @csrf
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Company Name</label>
                  <input type="text" class="form-control" name="company_name" id="company_name" required="">
                </div>
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password" required="">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Repeat Password</label>
                  <input type="password" class="form-control" name="repeat_password" id="repeat_password" required="">
                </div>
                <div class="form-check form-check-info text-start ps-0">
                  <input class="form-check-input" type="checkbox" id="tosCheck">
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree to the <a href="{{ url('/terms-and-conditions') }}" target="blank" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" id="submit_form" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign Up</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  Already have an account?
                  <a href="{{ url('/login') }}" class="text-dark loading text-gradient font-weight-bold">Login</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

  
@endsection
@section('scripts')

<script type="text/javascript">
  $(document).ready(function(){
    $("#submit_form").click(function(e){
      e.preventDefault();

      var fieldsAreOk = true;

      var company_name = $("#company_name").val();
      var email = $("#email").val();
      var password = $("#password").val();
      var repeat_password = $("#repeat_password").val();
      var organization = $("#organization").val();

      if(!company_name){
        fieldsAreOk = false;
        toastr.error("Company Name is required.");
      }
      if(!email){
        fieldsAreOk = false;
        toastr.error("Email is required.");
      }
      if(!IsEmail(email)){
        fieldsAreOk = false;
        toastr.error("Invalid Email.");
      }
      if(!password){
        fieldsAreOk = false;
        toastr.error("Password is required.");
      }
      if(repeat_password != password){
        fieldsAreOk = false;
        toastr.error("Password are not same.");
      }
      if(!$("#tosCheck").is(":checked")){
        
        fieldsAreOk = false;
        toastr.error("Please agree to the terms and conditions.");
      }
      if(fieldsAreOk){
        showLoader();
        $('#signup_form').submit();
      }
      
    });


    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      }else{
        return true;
      }
    }
  });
</script>
@endsection
 