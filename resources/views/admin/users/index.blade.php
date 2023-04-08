@extends('admin/layouts/masterad')
@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Quản lý người dùng</h6>
                
                @if(session()->has('mess'))
                <p class="alert alert-primary sm-4">
                    {{session('mess')}}
                </p>
                @endif
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID người dùng</th>
                            <th scope="col">Tên người dùng</th>
                            <th scope="col">Email</th>
                            <th></th>

                        </tr>
                    </thead>
                    @foreach($nguoidung as $item)
                    <tbody>
                        <tr>
                            <td>{{$item->idusers}}</td>
                            <td>{{$item->ten}}</td>
                            <td>{{$item->email}}</td>
                            <th>
                                <form action="/admin/users/destroy/{{$item->idusers}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="xóa" class="btn btn-danger">
                                </form>
                            </th>
     
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
        </div>

    </div>
</div>
<!-- Table End -->
@stop