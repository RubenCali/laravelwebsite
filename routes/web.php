<?php

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
    return view('homepage');
})->name('homepage');
Route::get('/blog-posten', 'BlogPostenController@blogPosten')->name('blogPosten');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@handleForm')->name('contact.handle');

Route::get('blog/{id}', function($id)
{
    return 'blog '.$id;
});


// Route::group(['prefix' => 'studenten'], function(){
//     Route::get('ruben', function(){
//         return 'Ruben';
//     });
//     Route::get('joey', function(){
//         return 'joey';
//     });
//     Route::get('mees', function(){
//         return 'mees';
//     });

// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
