<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loaitin;
use App\Models\Tintuc;
use App\Models\Category;
use DB;
class PagesController extends Controller
{
    //
    public function pageloaitin($idloaitin)
    {
        $loaitin=Loaitin::find($idloaitin);
        $tintuc=Tintuc::where('idloaitin',$idloaitin)->paginate(2);
        $tinnoibat=Tintuc::where('hot',1)->take(5)->get();
        return view('clients.pages.loaitin',['theloai'=>Category::all(),'tintuc'=>$tintuc,'loaitin'=>$loaitin,'tinnoibat'=>$tinnoibat]);
      
    }
    public function trangchu()
    {
        $tinnoibat=Tintuc::where('hot',1)->take(5)->get();
        return view('clients.pages.index',['theloai'=>Category::all(),'tinnoibat'=>$tinnoibat]);
    }
    public function chitiettintuc($id)
    {
        
     
        $tintuc=Tintuc::findOrFail($id);
        $tinnoibat=Tintuc::where('hot',1)->take(5)->get();
        DB::table('tintuc')->where('idtintuc', $id)->update(['luotxem' => $tintuc->luotxem+1]); 
        
  
        return view('clients.pages.tintuc',['theloai'=>Category::all(),'tintuc'=>$tintuc,'tinnoibat'=>$tinnoibat]);
    }
    public function find(Request $r)
    {
        $kw = $r->keyword;
        $tintuc = Tintuc::whereFullText('mota',"%$kw%")->orwhereFullText('noidung',"%$kw%")->orwhereFullText('tieude',"%$kw%")->paginate(5);
        return view('clients.pages.timkiem', ['tintuc' => $tintuc,'theloai'=>Category::all(),'tukhoa'=>$kw]);
        //return view('home.book3');
    }
  

}
