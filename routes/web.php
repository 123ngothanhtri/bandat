<?php

use Illuminate\Support\Facades\Route;

Route::get('/register-user', [App\Http\Controllers\UserController::class,'registerUser'] );
Route::post('/post-register-user', [App\Http\Controllers\UserController::class,'postRegisterUser'] );
Route::get('/login-user', [App\Http\Controllers\UserController::class,'loginUser'] );
Route::post('/post-login-user', [App\Http\Controllers\UserController::class,'postLoginUser'] );

Route::get('/profile-user', [App\Http\Controllers\UserController::class,'profileUser'] )->middleware('checkLoginUser');
Route::get('/logout-user', [App\Http\Controllers\UserController::class,'logoutUser'] );


//Route::get('/register-admin', [App\Http\Controllers\AdminController::class,'registerAdmin'] );
//Route::post('/post-register-admin', [App\Http\Controllers\AdminController::class,'postRegisterAdmin'] );
Route::get('/login-admin', [App\Http\Controllers\AdminController::class,'loginAdmin'] );
Route::post('/post-login-admin', [App\Http\Controllers\AdminController::class,'postLoginAdmin'] );

Route::get('/profile-admin', [App\Http\Controllers\AdminController::class,'profileAdmin'])->middleware('checkLoginAdmin');
Route::get('/logout-admin', [App\Http\Controllers\AdminController::class,'logoutAdmin'])->middleware('checkLoginAdmin');
Route::get('/quan-ly-user', [App\Http\Controllers\AdminController::class,'quanLyUser'])->middleware('checkLoginAdmin');
Route::get('/quan-ly-bai-viet', [App\Http\Controllers\AdminController::class,'quanLyBaiViet'])->middleware('checkLoginAdmin');
Route::get('/quan-ly-xoa-bai-viet/{id}', [App\Http\Controllers\AdminController::class,'quanLyXoaBaiViet'])->middleware('checkLoginAdmin');
Route::get('/delete-user/{id}', [App\Http\Controllers\AdminController::class,'deleteUser'])->middleware('checkLoginAdmin');



Route::get('/', [App\Http\Controllers\MainController::class,'trangchu'] );
Route::get('/them-bai-viet', [App\Http\Controllers\BaiVietController::class,'themBaiViet'])->middleware('checkLoginUser');
Route::post('/post-them-bai-viet', [App\Http\Controllers\BaiVietController::class,'postThemBaiViet'])->middleware('checkLoginUser');
Route::get('/sua-bai-viet/{id}', [App\Http\Controllers\BaiVietController::class,'suaBaiViet'])->middleware('checkLoginUser');
Route::post('/post-sua-bai-viet', [App\Http\Controllers\BaiVietController::class,'postSuaBaiViet'])->middleware('checkLoginUser');


Route::get('/cap-nhat-user', [App\Http\Controllers\UserController::class,'capNhatUser'])->middleware('checkLoginUser');
Route::post('/post-cap-nhat-user', [App\Http\Controllers\UserController::class,'postCapNhatUser'])->middleware('checkLoginUser');

Route::get('/mat-khau-user', [App\Http\Controllers\UserController::class,'matKhauUser'])->middleware('checkLoginUser');
Route::post('/post-mat-khau-user', [App\Http\Controllers\UserController::class,'postMatKhauUser'])->middleware('checkLoginUser');

Route::get('/xem-bai-viet/{id}', [App\Http\Controllers\BaiVietController::class,'xemBaiViet']);
Route::get('/mat-khau-user', [App\Http\Controllers\UserController::class,'matKhauUser'])->middleware('checkLoginUser');
Route::get('/xoa-bai-viet/{id}', [App\Http\Controllers\UserController::class,'xoaBaiViet'])->middleware('checkLoginUser');
