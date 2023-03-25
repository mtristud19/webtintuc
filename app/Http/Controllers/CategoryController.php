<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Loaitin;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.category.index',['data'=>Category::all()]);
    }
  
    public function create()
    {
        return view('admin.category.createcat');
    }
    public function store(Request $r)
    {
        $r->validate(
            [
                'idnhomtin' =>'unique:category',
                'tennhomtin' =>'required|unique:category|min:3',
            ],
            [
                'idnhomtin.unique' => 'Mã phải là duy nhất',
                
                
               
                'tennhomtin.required'=>'Chưa điền tên nhóm tin 😡',
                'tennhomtin.unique' => 'Tên nhóm tin phải là duy nhất',
                'tennhomtin.min'=> 'Tên tối thiểu phải có 3 ký tự',
            ]
        );
        $c= Category::create($r->all());
        session()->flash('mess','Đã thêm mã: '. $c->idnhomtin);
        return redirect('/admin/category');
    }
    public function destroy($id)
    {
        if(count(Category::find($id)->loaitin)==0){
            Category::destroy($id);
            session()->flash('mess', 'đã xóa');
        }else{
            session()->flash('mess', 'không thể xóa vì có loại tin');
        }
        return redirect('/admin/category');
    }
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.editcat',['data'=>$data,'theloai'=>Category::all()]);
    }
    public function update(Request $r)
    {
        $r->validate(
            [
                
                'tennhomtin' =>'required|min:3',
            ],
            [
                'tennhomtin.required'=>'Chưa điền tên danh mục 😡',
                'tennhomtin.min'=> 'Tên tối thiểu phải có 3 ký tự',
            ]
        );
        $c = Category::findOrFail($r->idnhomtin);
        $c->tennhomtin = $r->tennhomtin;
        $c->save();
        session()->flash("mess","Sửa thành công");
        return redirect('/admin/category');
    }
    // Nguoi dung

}
