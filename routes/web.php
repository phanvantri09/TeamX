<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});
Route::group(['prefix' => 'admin', 'middleware'=>['CheckLoginUser']], function () {

    Route::group(['prefix' => 'blog', 'as' =>'blog.'], function () {
        Route::controller(BlogController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'service', 'as' =>'service.'], function () {
        Route::controller(ServiceController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'transaction', 'as' =>'transaction.'], function () {
        Route::controller(TransactionController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');

            Route::get('change_status/{id}/{status}','changeStatus')->name('changeStatus');
        });
    });
    Route::group(['prefix' => 'brand', 'as' =>'brand.'], function () {
        Route::controller(BrandController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('change_status/{id}/{status}','changeStatus')->name('changeStatus');
        });
    });
    Route::group(['prefix' => 'user', 'as' =>'user.'], function () {
        Route::controller(UserController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('list');

            // thêm
            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','update')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'destroy')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
});
