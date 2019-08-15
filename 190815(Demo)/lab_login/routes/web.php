<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');                //主畫面
Route::get('/home/secret', 'HomeController@secret');    //隱藏頁面

Route::get('/member/login', 'MemberController@login');  //顯示登入夜
Route::post('/member/login', 'MemberController@check'); //登入檢查
Route::get('/member/logout', 'MemberController@logout'); //登入檢查
Route::resource('/member', 'MemberController');

