@extends('clients/layouts/masteru')
@section('content')
@include('clients.layouts.navbar')
<div class="container">
    <div class="row d-flex justify-content-center ">
        <div class="col-sm-4"></div>
        <div class="col-md-4">
            <h1>
                @if(session()->has('error'))
                {{session()->get('error')}}
                @endif
            </h1>
            <form action="/loginuser" method="POST">
                @csrf
                <div class="bg-white rounded d-flex justify-content-center">
                    <div class="d-flex align-items-center justify-content-between mb-3 mt-3">
                        <h3 style="text-align: center;">Login</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="email">Email </label>
                        <input type="email" name="u" class="form-control" placeholder="name@example.com" required>
                  
                    </div>
                    <div class="form-floating mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="p" class="form-control" placeholder="Password" required>
                      
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Forgot Password</a>
                    </div>
                    <button type="submit"  class="btn btn-danger mt-4 mb-4">Sign In</button>
                    <p class="text-center mb-0">Bạn chưa có tài khoản? <a href="/registeruser">Register</a></p>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
      
    
@stop