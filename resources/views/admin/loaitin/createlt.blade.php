@extends('admin/layouts/masterad')
@section('content')
<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4 d-flex justify-content-center">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Thêm loại tin đi bạn</h6>
                <div class="container-fluid">
                    <form action="/admin/loaitin/store" method="POST">
                        @csrf

                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">ID loại tin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" required name="idloaitin">
                                @error('idloaitin')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tên loại tin</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" required name="tenloaitin">
                                @error('tenloaitin')
                                <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Nhóm tin</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-control" id="inputPassword3" name="idnhomtin">
                                    @foreach($theloai as $item)
                                    <option value="{{$item->idnhomtin}}">{{$item->tennhomtin}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <input type="submit" class="btn btn-success me-2" value="Thêm">
                            <a href="/admin/loaitin" class="btn btn-danger me-2">Trở về</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@stop