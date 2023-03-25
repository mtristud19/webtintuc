<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoaitinController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PagesController;
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
    route::prefix('ajax')->group(function () {
        route::get('/loaitin/{idNhomTin}', [AjaxController::class, 'getLoaiTin']);
      
    });
});

// route::get('/test', function () {
//     $nhomtin=Category::find(2);
//     foreach($nhomtin->tintuc as $tintuc){
//         echo $tintuc->tieude."<br>";
//     }
// });

route::get('/', [PagesController::class, 'trangchu']);
route::get('/loaitin/{idloaitin}', [PagesController::class, 'pageloaitin']);
route::get('/tintuc/{id}', [PagesController::class, 'chitiettintuc']);


