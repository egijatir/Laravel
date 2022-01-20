<?php

use App\Http\Controllers\Post;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return view('home',[
        "title"=>"home",
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=>"about",
        "name"=>"Egi Jati Ramadhan",
        "email"=>"egijatir@gmail.com",
        "images"=>"img/newhead.jpeg"

    ]);
});


Route::get('/posts',[PostController::class,'index']);

//halaman  singel
Route::get('/categories/{category:slug}',function(Category $category){
    return view('category',[
        'title'=>$category->name,
        'posts'=>$category->posts->load('category','user'),
        'category'=>$category->name
    ]);
});
Route::get('/author/{author:username}',function(User $author){
    return view('posts  ',[
        'title'=>'User Post',
        'posts'=>$author->posts->load('category','user'),
    ]);
});

Route::get('posts/{post:slug}', [PostController::class,'show']);
