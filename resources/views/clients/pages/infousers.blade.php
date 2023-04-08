@extends('clients/layouts/masteru')
@section('content')
@include('clients.layouts.navbar')
<div class="container">
    <div class="row d-flex justify-content-center ">
        <div class="col-sm-4"></div>
        <div class="col-md-4">
            <h1>
                @if(session()->has('mess'))
                <p class="alert alert-success sm-4">
                    {{session('mess')}}
                </p>
                @endif
            </h1>
            <form action="/users/update/{{$nguoidung->idusers}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="bg-white rounded d-flex justify-content-center">
                    <div class="d-flex align-items-center justify-content-between mb-3 mt-3">
                        <h3 style="text-align: center;">Thông tin người dùng</h3>
                    </div>
                    <div class="form-floating mb-3">
                        <label for="hoten">Name</label>
                        <input type="text" name="ten" class="form-control" value="{{$nguoidung->ten}}" required>
                        @error('ten')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" value="{{$nguoidung->email}}" readonly>
                        @error('email')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="checkbox" name="changePassword" id="changePassword">

                        <label for="exampleInput1" class="form-label">Đổi mật khẩu</label>

                        <input type="password" class="form-control password"   name="password" disabled='disable' required>
                        @error('password')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="form-floating mb-3">
                        <label for="exampleInput1" class="form-label">Xác nhận mật khẩu</label>

                        <input type="password"  class="form-control password"   name="password2" disabled='disable' required>
                        @error('password2')
                        <div class=" alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>


                    <button type="submit" value="dangky" class="btn btn-danger mt-10 mb-4" style="margin-top: 6px;">Register</button>
                    <p class="text-center mb-0">Bạn đã có tài khoản? <a href="/loginuser">Sign In</a></p>
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>


@stop
@section('script')
<script>
    $(document).ready(function() {
        $("#changePassword").change(function(){
            if($(this).is(":checked"))
            {
                $(".password").removeAttr('disabled');
            }else{
                $(".password").attr('disabled','');
            }
        });

    });
</script>
@stop