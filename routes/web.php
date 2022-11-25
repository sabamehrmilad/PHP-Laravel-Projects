<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' ,function () {
   return view('home');
});




Route::get('/users',[UserController::class, 'index'])->middleware('auth');
Route::get('/user/create',[UserController::class, 'register'])->middleware('auth');
Route::post('/user/store',[UserController::class, 'store'])->middleware('auth');



Route::get('/comments',[CommentsController::class, 'index'])->middleware('auth');



Route::post('/slider',[SliderController::class, 'store'])->middleware('auth');
Route::get('/createSlider',[SliderController::class, 'newSlider'])->middleware('auth');
Route::get('/slider',[SliderController::class, 'index'])->middleware('auth');



Route::get('/post',[PostController::class, 'index'])->middleware('auth');
Route::get('/createPost',[PostController::class, 'create'])->middleware('auth');
Route::post('/post',[PostController::class, 'store'])->middleware('auth');





Route::get('/categories',[CategoryController::class, 'index'])->middleware('auth');
Route::get('/createcategory',[CategoryController::class, 'create']);
Route::post('/categories',[CategoryController::class, 'store']);



route::resource('/categories', CategoryController::class)->middleware('auth');
route::resource('/slider', SliderController::class)->middleware('auth');
route::resource('/post', PostController::class)->middleware('auth');




Route::get('/admin.index',[adminController::class, 'index']);
Route::get('/admin.create',[adminController::class, 'newadmin']);
Route::post('/admin.index',[adminController::class, 'store']);

route::resource('/admin', adminController::class);






