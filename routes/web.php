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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration/view', 'HomeController@registeredList');


Route::get('/course/add', 'CourseController@getAddForm');
Route::post('/course/add', 'CourseController@add');

Route::get('/course/register', 'CourseController@register');
Route::post('/course/register/save', 'CourseController@saveRegisteredCourses');


Route::get('/course/view', 'CourseController@index');
Route::get('/course/view/student/{id}', 'CourseController@getStudentCourses');


Route::get('/profile/view', 'UserController@profile');

Route::get('/setup/database', 'UserController@setupDatabase');