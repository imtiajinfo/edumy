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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
		Route::get('dashboard','DashboardController@index')->name('dashboard');
		Route::resource('tag','TagController');
		Route::resource('category','CategoryController');
		Route::resource('slider', 'SliderController');
		Route::resource('course', 'CourseController');
		Route::get('contact','ContactController@index')->name('contact.index');
    	Route::get('contact/{id}','ContactController@show')->name('contact.show');
    	Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});

Route::group(['as'=>'instructor.','prefix'=>'instructor','namespace'=>'Instructor','middleware'=>['auth','instructor']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});
