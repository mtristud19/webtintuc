@extends('admin/layouts/masterad')
@section('content')
<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Quản lý loại tin</h6>
                
                @if(session()->has('mess'))
                <p class="alert alert-primary sm-4">
                    {{session('mess')}}
                </p>
                @endif
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID loại tin</th>
                            <th scope="col">Tên loại tin</th>
                            <th scope="col">Nhóm tin</th>
                            <th></th>

                        </tr>
                    </thead>
                    @foreach($loaitin as $item)
                    <tbody>
                        <tr>
                            <td>{{$item->idloaitin}}</td>
                            <td>{{$item->tenloaitin}}</td>
                            <td>{{$item->nhomtin->tennhomtin}}</td>
                            <th>
                                <form action="/admin/loaitin/destroy/{{$item->idloaitin}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="submit" value="xóa" class="btn btn-danger">
                                </form>
                            </th>
                            <th>
                                <a href="/admin/loaitin/edit/{{$item->idloaitin}}" class="btn btn-success"> sửa</a>
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