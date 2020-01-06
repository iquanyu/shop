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


Route::prefix('admin')->middleware('web')->name('admin.')->namespace('\App\Http\Controllers\Admin')->group(function(){
  Route::namespace('Auth')->group(function(){
    Route::get('login', 'LoginController@showLoginForm')->name('auth.login');
    Route::post('login', 'LoginController@login')->name('auth.login');
    Route::match(['post', 'get'], 'logout', 'LoginController@logout')->name('auth.logout');
  });
  
  Route::middleware('auth')->group(function(){
    
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/logs', 'OperationLogController')->only(['index','destroy']);
    
    Route::resource('/permissions', 'PermissionController');
    Route::resource('/roles', 'RoleController');
	Route::resource('/users', 'UserController');

  });
});