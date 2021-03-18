<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeControllerAdmin;
use App\Http\Controllers\Admin\UserControllerAdmin;
use App\Http\Controllers\user\HomeController;
use App\Http\Controllers\user\PostControllerUser;


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
//     return view('user/blog');
// });

// Route::get('/post', function () {
//     return view('user/post');
// })->name('post');



// Route::resource('/', 'HomeController')->only([
//     'index',
// ]);

// Route::get('admin/home', function () {
//     return view('admin.home');
// })->name('post');


Route::get('/', [HomeController::class,'__invoke']);
Route::get('/post', [PostControllerUser::class,'__invoke']);

Route::resource('admin/user',UserControllerAdmin::class);
Route::resource('admin/post',PostController::class);
Route::resource('admin/tag',TagController::class);
Route::resource('admin/category',CategoryController::class);
Route::get('admin/home', [HomeControllerAdmin::class, 'index'])->name('admin.home');






