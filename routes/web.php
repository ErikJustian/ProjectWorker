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
    return view('child');
});


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    
    // Employee
    Route::middleware(['employee'])->group(function () {
        Route::prefix('employee')->group(function () {
            Route::get('/search', 'Employee\SearchController@index')->name('search');
            Route::get('/profile', 'ProfileController@indexEmployee')->name('employeeprofile');
        });
    });
    
    // Employer
    Route::middleware(['employer'])->group(function () {
        Route::prefix('employer')->group(function () {
            Route::get('/profile', 'ProfileController@indexEmployer')->name('employerprofile');
            Route::get('/postjob', 'PostJobController@index')->name('postjobform');
            Route::post('/postjob', 'PostJobController@post')->name('postjob');
        });
    });
    Route::get('/home', 'HomeController@index')->name('home');
});
