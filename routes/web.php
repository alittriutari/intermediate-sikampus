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
    return view('dashboard-staff');
});


Route::resource('user','UserController');

	Route::resource('class','ClassController');
    Route::resource('student','StudentController');
    Route::resource('lecture','LectureController');
    Route::resource('course','CourseController');
    Route::resource('schedule','ScheduleController');
    Route::resource('staff','StaffController');

// Route::prefix('staff')->group(function(){
// 	Route::get('login', function(){
// 		return view('dashboard-staff');
// 	})->name('staff.login')->middleware('guest:staff');

// 	Route::middleware('auth:staff')->group(function(){
//     Route::get('dashboard', function(){
//       return view('pages.dashboard');
//     })->name('staff.dashboard');

//     Route::resource('class','ClassController');
//     Route::resource('student','StudentController');
//     Route::resource('lecturer','LecturerController');
//     Route::resource('course','CourseController');
//     Route::resource('schedule','ScheduleController');
//     Route::resource('staff','StaffController');
//     });
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
