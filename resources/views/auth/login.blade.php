@extends('layouts.app')
@section('content')
    

<div class="container ">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body text-center bg-light-green py-5">
                <h3 class="card-title font-weight-bold">Login to Digital Workbook</h3>
                    <form class="form-signin">
                        <div class="form-label-group m-3">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
                        </div>
                        <div class="form-label-group m-3">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>   
                        </div >
                        <div class="mt-2">
                            <button class="btn button-dark-green" type="submit">Login</button>
                        </div>
                        <a  href="">Forgot Password?</a>  
                        <hr class="my-4">
                        <h6>New to Digital Workbook</h6>
                        <div class="mt-2">
                            <button class="btn button-dark-green text-light font-weight-bold" type="submit">Create New Account</button>
                        </div>
                    </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection