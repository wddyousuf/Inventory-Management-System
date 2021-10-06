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
Route::prefix('/employee')->group(function(){
    Route::get('/view','EmployeeController@view')->name('employee.view');
    Route::get('/add','EmployeeController@add')->name('employee.add');
    Route::post('/store','EmployeeController@store')->name('employee.store');
    Route::get('/edit/{id}','EmployeeController@edit')->name('employee.edit');
    Route::post('/update/{id}','EmployeeController@update')->name('employee.update');
    Route::post('/delete','EmployeeController@delete')->name('employee.delete');
});
