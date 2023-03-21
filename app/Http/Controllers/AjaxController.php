<?php

namespace App\Http\Controllers;

use App\Models\Loaitin;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function getLoaiTin($idNhomTin)
    {
        $loaitin=Loaitin::where('idnhomtin',$idNhomTin)->get();
        foreach($loaitin as $iteam){
            echo "<option value='".$iteam->idloaitin."'>".$iteam->tenloaitin."</option>";
        }
    }
}
