@extends('layouts.app')
@section('content')
    

<div class="container ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body text-center bg-light-green py-5">
                <h3 class="card-title font-weight-bold">Create a Digital Workbook</h3>
                <h4>Free Account</h4>
                <div class="container-fluid">
                    <form class="form-signin">
                        <div class="form-label-group my-3">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                        </div>
                        <div class="form-label-group my-3">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>   
                        </div >
                        <div class="mt-2 mw-100">
                            <button class="btn btn-block button-dark-green " type="submit"> Get Started</button>
                        </div>
                        <small>By clicking "Get Started", I agree to the Terms and Service</small>
                        <hr class="my-4">
                        <h6>Already have an account? <a href="/Login">Log in</a></h6>
                    </form>
                </div>
                    
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection