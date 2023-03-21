<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tintuc;
use Illuminate\Support\Facades\Storage;
class TintucController extends Controller
{
    //
    public function index()
    {
        return view('admin.tintuc.index',['tintuc'=>Tintuc::orderBy('idtintuc','ASC')->paginate(6)]);
    }
    public function create()
    {
        return view('admin.tintuc.creatett');
    }
    public function store(Request $r)
    {
      
        $data = $r->all();
        ///response()->json($r->all());
        $img = $data['idtintuc'] . '-' . $r->img->getClientOriginalName();
        $data['img'] = $img;
        $r->img->storeAs('public/public_img', $img);
        $u = Tintuc::create($data);
        return redirect('admin/tintuc');
    }
    public function destroy($id)
    {
        //Storage::disk('local')->delete("public/product/$data->Image");
        $data = Tintuc::find($id);
        //dd($data->img);
        if (Count(Tintuc::find($id)->comment) == 0) {
            Storage::disk('local')->delete("public/public_img/$data->img");
            Tintuc::destroy($id);
            session()->flash('mess', 'đã xóa');
        } else {
            session()->flash('mess', 'không thể xóa vì tồn tại bình luận');
        }
        return redirect('/admin/tintuc');
    }
    public function edit($id)
    {
        $data = Tintuc::findOrFail($id);
        return View('admin.tintuc.edittt', ['data' => $data]);
    }
    
    public function update(Request $request)
    {
        //
     
        $c = Tintuc::findorfail($request->idtintuc); //tim cate can sua
        $temp = $c->img;
        //dd($data->Image);
        if ($request->img != null) {
            Storage::disk('local')->delete("public/public_img/$temp");
            $img = $c['idtintuc'] . '-' . $request->img->getClientOriginalName();
            $c['img'] = $img;
            $request->img->storeAs('public/public_img', $img);
        }
        $c->tieude = $request->tieude; //thay doi cat name
        $c->mota = $request->mota;
        $c->noidung = $request->noidung;
        $c->ngaydang = $request->ngaydang;
        $c->idloaitin = $request->idloaitin;
        $c->luotxem = $request->luotxem;
        $c->hot = $request->hot;
        $c->save();
        session()->flash("mess","Sua thanh cong");
        //dd($c);
        return redirect('/admin/tintuc');
    }

}
