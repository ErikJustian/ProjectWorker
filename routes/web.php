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

// Delete this after use    
Route::get('/employeeprofile', function() {
    return view('layouts.employee.employeeprofile');
});

Route::get('/employerpostedjob', function() {
    return view('layouts.employer.employerpostedjob');
});

Route::get('/applicantslist', function() {
    return view('layouts.employer.applicantslist');
});

Route::get('/referredjob', function() {
    return view('layouts.employee.referredjoblist');
});


Route::prefix('admin')->group(function() {

    Route::middleware(['adminlogged'])->group(function () {
        Route::get('login', 'Admin\LoginController@showLogin');
        Route::post('login', 'Admin\LoginController@authenticate');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', 'Admin\LoginController@dashboard');
        Route::get('logout', 'Admin\LoginController@logout');
        // admin user manage
        Route::get('add', 'Admin\AdminController@index');
        Route::get('add/new', 'Admin\AdminController@form');
        Route::post('add/new', 'Admin\AdminController@add');
        Route::post('add/delete', 'Admin\AdminController@delete');
        Route::get('add/data', 'Admin\AdminController@data')->name('admindata');
    });
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
