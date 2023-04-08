<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Category;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    //
    public function index()
    {
        return view('admin.users.index',['nguoidung'=>Users::orderBy('idusers','ASC')->get()]);
    }
    public function destroy($id)
    {
        if(count(Users::find($id)->comment)==0){
            Users::destroy($id);
            session()->flash('mess', 'đã xóa');
        }else{
            session()->flash('mess', 'không thể xóa vì người dùng có bình luận');
        }
        return redirect('/admin/users');
    }
    public function info($id)
    {
        
        $data = Users::findOrFail($id);
        return view('clients.pages.infousers',['nguoidung'=>$data,'theloai'=>Category::all()]);
    }
    public function update(Request $request,$id){
     
        $request->validate(
            [
                'ten' => 'required|min:3',
                
                'password2'=>'same:password',
             

            ],
            [
                'ten.min' => 'Họ tên phải tối thiểu 3 ký tự',
                
               'password2.same'=>'Không trùng khớp',
                
            ]
        );
       
        $c = Users::findorfail($id);
        $c->ten=$request->ten;
        if($request->changePassword =="on"){
            $request->validate(
                [
                   
                    
                    'password2'=>'same:password',
                 
    
                ],
                [
                    
                    
                   'password2.same'=>'Không trùng khớp',
                    
                ]
            );
            $c->password=hash::make($request->password);
        }
        
        $c->save();
        session()->flash("mess","Cập nhật thành công");
        session()->forget(['users']);
        
        $u = Users::find($id);
        if($u){
            session([
                'users' => [
                    'idusers' => $u->idusers,
                    'email' => $u->email,
                    'ten' => $u->ten,
                    
                ]
            ]);
            return redirect("/users/info/$id");
        }
        
    }
}
