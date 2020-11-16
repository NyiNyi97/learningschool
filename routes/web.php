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

// Route::get('/', function () {
//     return view('welcome');
// });


// frontend 
Route::get('/', 'FrontendController@home')->name('mainpage');
Route::get('onlinecourse', 'FrontendController@onlinecourse')->name('onlinecoursepage');
Route::get('contact', 'FrontendController@contact')->name('contactpage');
Route::post('contact', 'FrontendController@contactSubmit')->name('contact.Submit');


Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');
Route::get('profile', 'FrontendController@profile')->name('profilepage');
Route::get('aboutus', 'FrontendController@aboutus')->name('aboutuspage');
Route::get('coursedetail/{id}', 'FrontendController@coursedetail')->name('coursedetail');

Route::get('coursebycategory/{id}', 'FrontendController@coursebycategory')->name('coursebycategory');

//ajax
// Route::post('bycategory', 'FrontendController@bycategory')->name('bycategory');

Route::get('grade1', 'FrontendController@grade1')->name('grade1page');

Route::resource('user', 'UserController');
Route::resource('register', 'RegisterController');
Route::post('confirm/{id}', 'RegisterController@confirm')->name('register.confirm');


Route::middleware(['role:admin'])->group(function () {
//backend
Route::resource('category', 'CategoryController'); // 7 {get, post, put, delete}
Route::resource('course', 'CourseController'); // 7 {get, post, put, delete}
});

Route::get('/home', 'HomeController@index')->name('home');


// Auth
Auth::routes(['register'=>false]);
