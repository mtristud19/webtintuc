@extends('admin/layouts/masterad')
@section('content')
<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4 d-flex justify-content-center">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Cập nhật loại tin</h6>
                <form action="/admin/loaitin/update" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ID loại tin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" name="idloaitin" value="{{$loaitin->idloaitin}}" readonly>
                            @error('idloaitin')
                            <p class="alert alert-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tên nhóm tin</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" name="tenloaitin" value="{{$loaitin->tenloaitin}}">
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
                                <option @if($loaitin->idnhomtin==$item->idnhomtin)
                                    {{"selected"}}
                                    @endif
                                    value="{{$item->idnhomtin}}">{{$item->tennhomtin}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p class="d-flex justify-content-end">
                        <input type="submit" class="btn btn-success me-2" value="Sửa">

                        <a href="/admin/loaitin" class="btn btn-danger me-2">Trở về</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@stop