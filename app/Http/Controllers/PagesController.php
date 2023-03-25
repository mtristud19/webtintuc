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
        return view('clients.pages.loaitin',['theloai'=>Category::all(),'tintuc'=>$tintuc,'loaitin'=>$loaitin]);
      
    }
    public function trangchu()
    {
        return view('clients.pages.index',['theloai'=>Category::all()]);
    }
    public function chitiettintuc($id)
    {
        
     
        $tintuc=Tintuc::findOrFail($id);
      
        DB::table('tintuc')->where('idtintuc', $id)->update(['luotxem' => $tintuc->luotxem+1]); 
        
  
        return view('clients.pages.tintuc',['theloai'=>Category::all(),'tintuc'=>$tintuc]);
    }
  

}
