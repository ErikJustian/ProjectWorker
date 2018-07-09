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
Route::get('/employerpostedjob', function() {
    return view('layouts.employer.employerpostedjob');
});

Route::get('/applicantslist', function() {
    return view('layouts.employer.applicantslist');
});

Route::get('/referredjob', function() {
    return view('layouts.employee.referredjoblist');
});

Route::get('/searchjob', function() {
    return view('layouts.employee.searchjob');
});


Route::prefix('admin')->group(function() {

    Route::middleware(['adminlogged'])->group(function () {
        Route::get('login', 'Admin\LoginController@showLogin');
        Route::post('login', 'Admin\LoginController@authenticate');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('', function() {
            return redirect('admin/dashboard');
        });
        Route::get('dashboard', 'Admin\LoginController@dashboard');
        Route::get('logout', 'Admin\LoginController@logout');
        // admin user manage
        Route::get('add', 'Admin\AdminController@index');
        Route::get('add/new', 'Admin\AdminController@form');
        Route::post('add/new', 'Admin\AdminController@add');
        Route::post('add/delete', 'Admin\AdminController@delete');
        Route::get('add/data', 'Admin\AdminController@data')->name('admindata');

        Route::prefix('employee')->group(function() {
            // User Control
            Route::get('data', 'Admin\EmployeeController@data')->name('employeedata');
            Route::get('new', 'Admin\EmployeeController@form')->name('employeeform');
            Route::get('edit/{id}', 'Admin\EmployeeController@editForm')->name('employeeeditform');
            Route::post('edit', 'Admin\EmployeeController@edit')->name('employeeedit');
            Route::post('delete', 'Admin\EmployeeController@delete')->name('employeedelete');
            Route::post('register', 'Admin\EmployeeController@register')->name('employeeregister');
            Route::get('', 'Admin\EmployeeController@index')->name('employeeindex');
        });
        
        Route::prefix('transaction')->group(function() {
            Route::get('', 'Admin\TransactionController@index')->name('transactiontable');
            Route::get('userdata', 'Admin\TransactionController@userData');
            Route::get('data', 'Admin\TransactionController@transactionData')->name('transactiondata');
            Route::get('new', 'Admin\TransactionController@form')->name('transactionform');
            Route::post('new', 'Admin\TransactionController@transaction')->name('transactionsubmit');        
        });
    });
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    
    // Employee
    Route::middleware(['employee'])->group(function () {
        Route::prefix('employee')->group(function () {
            Route::post('/search', 'Employee\SearchController@takeJob');
            Route::get('/search', 'Employee\SearchController@index')->name('search');
            Route::get('/profile', 'ProfileController@indexEmployee')->name('employeeprofile');
            Route::post('refer', 'Employee\SearchController@referrenceJob')->name('employeerefer');
            Route::get('/referredjob', 'Employee\ReferredJobController@index')->name('referredjob');
            Route::get('/employer/{id}', 'Employee\SearchController@viewProfile')->name('viewemployer');
        });
    });
    
    // Employer
    Route::middleware(['employer'])->group(function () {
        Route::prefix('employer')->group(function () {
            Route::get('/profile', 'ProfileController@indexEmployer')->name('employerprofile');
            Route::get('/applicants', 'Employer\ApplicantController@index')->name('applicantlist');
            Route::get('/postedjob', 'Employer\PostedJobController@index')->name('postedjob');
            Route::get('/postjob', 'Employer\PostJobController@index')->name('postjobform');
            Route::post('/postjob', 'Employer\PostJobController@post')->name('postjob');
        });
    });
    Route::get('/home', 'HomeController@index')->name('home');
});
