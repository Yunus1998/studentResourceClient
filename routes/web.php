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

    return view('home');
})->name('home');

Route::get('/students', 'ApiController@allStudents')->name('students');

Route::get('/student/create', 'ApiController@create')->name('student.create');

Route::get('/student/store', 'ApiController@store')->name('student.store');

Route::get('/student/edit/{id}', 'ApiController@edit')->name('edit');

Route::get('/student/update/{id}', 'ApiController@update')->name('student.update');

Route::get('/student/delete/{id}', 'ApiController@delete')->name('student.delete');






