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

//Authentication
Route::view('/', 'index');
Route::get('/register', 'Authentication\RegistrationController@create');
Route::post('register', 'Authentication\RegistrationController@store');
Route::get('/login', 'Authentication\SessionController@create');
Route::post('/login', 'Authentication\SessionController@store');

//Deactive user
Route::view('/deactiveuser','deactiveuser');

Route::group(['middleware' => ['authentication']], function () {

    Route::get('/logout', 'Authentication\SessionController@destroy');

    //admin
    Route::get('/admin', 'Admin\AdminController@index');

    //admin user
    Route::get('/adminuser', 'Admin\UserController@index');
    Route::get('/adminuser/{user_id}', 'Admin\UserController@show');
    Route::put('/adminuser/{user_id}', 'Admin\UserController@destroy');

    //admin lawyer
    Route::get('/adminlawyer', 'Admin\LawyerController@index');
    Route::get('/adminlawyer/{user_id}', 'Admin\LawyerController@show');
    Route::put('/adminlawyer/{user_id}', 'Admin\LawyerController@destroy');

    //admin lawyer request
    Route::get('/lawyerrequest', 'Admin\LawyerController@view');
    Route::get('/request/{user_id}', 'Admin\LawyerController@edit');
    Route::post('/request/{user_id}', 'Admin\LawyerController@update');


    //lawyer
    Route::view('/lawyer', 'lawyer.index');

    //user
    Route::view('/user', 'user.index');
    Route::get('/userlawyer', 'User\PageController@index');
    Route::get('/userlawyer/{user_id}','User\PageController@show');
    Route::view('/a', 'user.applictation.from');

});
