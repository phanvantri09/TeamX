<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
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
Route::controller(HomeController::class)->group(function () {
    Route::get('/','home')->name('home');
    //dịch vụ
    Route::get('/service','service')->name('service');
    // thông tin người dùng
    Route::get('/info','info')->name('info');
    // danh sách blog [làm sau]
    Route::get('/blog','blog')->name('blog');
    // thông tin blog [làm sau]
    Route::get('/blogPost/{title}','blogPost')->name('blogPost');
    // lịch sử giao dịch của user
    Route::get('/history','history')->name('history');
    // liên hệ
    Route::get('/contact','contact')->name('contact');
    Route::post('/contactPost','contactPost')->name('contactPost');
    //
    Route::get('/transactionUser','transactionUser')->name('transactionUser');
    Route::post('/transactionUserPost','transactionUserPost')->name('transactionUserPost');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login');
    Route::get('/logout', 'logout')->name('logout');

    Route::get('/register','register')->name('register');
    Route::post('/registerPost','registerPost')->name('registerPost');
});
Route::group(['prefix' => 'admin', 'middleware'=>['CheckAdmin']], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/','index')->name('admin');
    });

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

                Route::get('/tri','index')->name('index');



            Route::get('/add', 'create')->name('add');
            Route::post('/add', 'store')->name('addPost');

            // //sửa
            // Route::get('edit/{id}','edit')->name('edit');
            // Route::post('edit/{id}','update')->name('editPost');
            // // xóa
            // Route::get('/delete/{id}', 'destroy')->name('delete');

            // // hiển thị tất cả
            // Route::get('/show/{id}', 'show')->name('show');

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
            Route::get('/list/{type}','index')->name('list');

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
