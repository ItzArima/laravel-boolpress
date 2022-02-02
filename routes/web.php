<?php

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'PageController@home')->name('home');

Route::get('/contacts', 'PageController@contacts')->name('contacts');

Route::post('/contacts/send' , 'PageController@sendMail')->name('contacts.send');

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
});

Route::resource('/products', ProductController::class)->only([
    'index','show'
]);

Route::resource('/posts', PostController::class)->only([
    'index','show'
]);

Route::resource('/tags', TagController::class)->only([
    'index','show'
]);

Route::resource('/categories', CategoryController::class)->only([
    'index','show'
]);

/* Route::get('posts/get/{post}' , function(Post $post){
    return new PostResource(Post::all());
}); */

Route::get('test' , function(){
    return view('guest.api.posts');
});