<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoaitinController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\ktAdmin;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\kiemtraUser;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Category;

route::middleware([ktAdmin::class])->group(function () {
    route::prefix('admin')->group(function () {
        route::get('/', function () {
            return view('admin.index');
        });
        //quan ly category
        route::prefix('category')->group(function () {
            route::get('/', [CategoryController::class, 'index']);
            route::get('create', [CategoryController::class, 'create']);
            route::post('store', [CategoryController::class, 'store']);
            route::delete('destroy/{id}', [CategoryController::class, 'destroy']);
            route::get('edit/{id}', [CategoryController::class, 'edit']);
            route::put('update', [CategoryController::class, 'update']);
        });
        // quan ly loai tin
        route::prefix('loaitin')->group(function () {
            route::get('/', [LoaitinController::class, 'index']);
            route::get('create', [LoaitinController::class, 'create']);
            route::post('store', [LoaitinController::class, 'store']);
            route::delete('destroy/{id}', [LoaitinController::class, 'destroy']);
            route::get('edit/{id}', [LoaitinController::class, 'edit']);
            route::put('update', [LoaitinController::class, 'update']);
        });
        // quan ly tin tuc
        route::prefix('tintuc')->group(function () {
            route::get('/', [TintucController::class, 'index']);
            route::get('create', [TintucController::class, 'create']);
            route::post('store', [TintucController::class, 'store']);
            route::delete('destroy/{id}', [TintucController::class, 'destroy']);
            route::get('edit/{id}', [TintucController::class, 'edit']);
            route::put('update', [TintucController::class, 'update']);
           
        });
        route::prefix('comment')->group(function () {
            route::delete('destroy/{idbinhluan}/{idtintuc}', [CommentController::class, 'destroy']);
        
           
        });
        route::prefix('users')->group(function () {
            route::get('/', [UsersController::class, 'index']);
            route::get('create', [TintucController::class, 'create']);
            route::post('store', [TintucController::class, 'store']);
            route::delete('destroy/{id}', [UsersController::class, 'destroy']);
        
           
        });
        route::prefix('ajax')->group(function () {
            route::get('/loaitin/{idNhomTin}', [AjaxController::class, 'getLoaiTin']);
        });
        Route::get('/login', function () {
            return View('admin.login');
        })->withoutMiddleware([ktAdmin::class]);
        Route::post('/login', [LoginController::class, 'login'])->withoutMiddleware([ktAdmin::class]);
        Route::get('/logout', [LoginController::class, 'logout'])->withoutMiddleware([ktAdmin::class]);
    });
});

// route::get('/test', function () {
//     $nhomtin=Category::find(2);
//     foreach($nhomtin->tintuc as $tintuc){
//         echo $tintuc->tieude."<br>";
//     }
// });
//trang chu
route::get('/', [PagesController::class, 'trangchu']);
route::get('/loaitin/{idloaitin}', [PagesController::class, 'pageloaitin']);
route::get('/tintuc/{id}', [PagesController::class, 'chitiettintuc']);
//login ng dung
route::get('/loginuser', [LoginController::class, 'loginuser']);
route::post('/loginuser', [LoginController::class, 'loginuserpost']);
route::get('/logoutuser', [LoginController::class, 'logoutuser']);
//dang ky
route::get('/registeruser', [LoginController::class, 'register']);
route::post('/registeruser', [LoginController::class, 'registerpost']);
route::post('/{id}', [CommentController::class, 'commentpost'])->middleware([kiemtraUser::class]);
route::get('/users/info/{id}', [UsersController::class, 'info'])->middleware([kiemtraUser::class]);
route::put('/users/update/{id}', [UsersController::class, 'update']);
route::get('/find', [PagesController::class, 'find']);
