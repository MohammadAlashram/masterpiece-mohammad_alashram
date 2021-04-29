<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('auther', function () {
    return view('auther');
});

Route::get('/', [App\Http\Controllers\RouteController::class, 'welcome'])->name('/');

Route::get('/contact', [App\Http\Controllers\RouteController::class, 'contact'])->name('contact');

Route::get('/about', [App\Http\Controllers\RouteController::class, 'about'])->name('about');
// Route::get('/support', [App\Http\Controllers\RouteController::class, 'support'])->name('support');

Route::get('/bookingthanks', [App\Http\Controllers\RouteController::class, 'bookingthanks'])->name('bookingthanks')->middleware('auth');

Route::get('/thanks', [App\Http\Controllers\RouteController::class, 'thanks'])->name('thanks');

Route::get('/404', [App\Http\Controllers\RouteController::class, 'errorPage'])->name('404');

Route::get('/back', [App\Http\Controllers\RouteController::class, 'back'])->name('back');

Route::get('/mentors', [App\Http\Controllers\RouteController::class, 'mentors'])->name('mentors');

Route::get('/blogs', [App\Http\Controllers\RouteController::class, 'blogs'])->name('blogs');

Route::get('single/{post}', [App\Http\Controllers\RouteController::class, 'singleblog'])->name('singleblog');

Route::get('department/{department}', [App\Http\Controllers\RouteController::class, 'department'])->name('department');

Route::get('mentor/profile/{user}', [App\Http\Controllers\RouteController::class, 'publicprofile'])->name('profile');
Route::get('department/mentor/profile/{user}', [App\Http\Controllers\RouteController::class, 'publicprofile'])->name('profile');

Route::get('mentor/profile/appointment/check/{user}', [App\Http\Controllers\RouteController::class, 'appointmentprofile'])->name('appointmentprofile');
Route::get('department/mentor/profile/appointment/check/{user}', [App\Http\Controllers\RouteController::class, 'appointmentprofile'])->name('appointmentprofile');


// Route::get('dashboard', function () {
//     return view('dashboard/dashboard');
// });

Route::get('dashboard', function () {
    return view('dashboard/dashboard_index');
})->name('dashboard')->middleware('superadmin');

Route::get('adminprofile', function () {
    return view('dashboard/admin_profile');
})->name('adminprofile')->middleware('admin');

Route::get('mentorprofile', function () {
    return view('dashboard/mentor_profile');
})->name('mentorprofile')->middleware('auth');

Route::get('userprofile', function () {
    return view('dashboard/user_profile');
})->name('userprofile')->middleware('auth');

Route::get('userappointment', function () {
    return view('dashboard/userappointment');
})->name('userappointment')->middleware('auth');

// Route::get('mentor-register', function () {
//     return view('auth/mentor');
// })->name('mentor-register');



// Route::get('dashboard', function () {
//     return view('dashboard/dashboard_index');
// })->name('dashboard');


// Route::get('dashboard', function () {
//     return view('dashboard/dashboard');
// })->middleware('auth');

// Route::get('dashboard', function () {
//     return view('dashboard/dashboard');
// })->middleware(['auth','verified']);

// Route::get('dashboard_app', function () {
//     return view('dashboard/dashboard_app');
// });

// Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google', 'App\Http\Controllers\Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'App\Http\Controllers\Auth\GoogleController@handleGoogleCallback');

Route::get('/status', 'App\Http\Controllers\UserController@statusShow')->name('status');

Route::get('user/block/{user}', 'App\Http\Controllers\UserController@block')->middleware('admin');
Route::get('user/ban/{user}', 'App\Http\Controllers\UserController@ban')->middleware('admin');
Route::get('user/unban/{user}', 'App\Http\Controllers\UserController@unban')->middleware('admin');
Route::get('user/bannedStatus', 'App\Http\Controllers\UserController@bannedStatus')->middleware('admin');

Route::post('mentor/profile/{user}/rating', 'App\Http\Controllers\UserController@star');
Route::post('department/mentor/profile/{user}/rating', 'App\Http\Controllers\UserController@star');
Route::post('mentor/profile/appointment/check/{user}/rating', 'App\Http\Controllers\UserController@newStar');
Route::post('mentor/profile/appointment/check/{user}', 'App\Http\Controllers\RouteController@check')->name('appointment-check-public');
Route::post('mentor/profile/appointment/check/{user}/get', 'App\Http\Controllers\RouteController@get')->name('appointment-get-public');
Route::post('department/mentor/profile/appointment/check/{user}', 'App\Http\Controllers\RouteController@check')->name('appointment-check-public');
Route::post('department/mentor/profile/appointment/check/{user}/get', 'App\Http\Controllers\RouteController@get')->name('appointment-get-public');
// Route::post('user/rating/{user}', 'App\Http\Controllers\UserController@star');
// Route::post('user/rating', 'App\Http\Controllers\UserController@star')->middleware('auth:api','throttle:rate_limit,1');


//////////////////Booking Routes//////////////////////
Route::post('book', 'App\Http\Controllers\BookingController@book')->name('bookappointment');
Route::get('userappointment', 'App\Http\Controllers\BookingController@userappointment')->name('userappointment')->middleware('auth');
Route::get('mentorappointment', 'App\Http\Controllers\BookingController@mentorappointment')->name('mentorappointment')->middleware('mentor');
Route::get('mentorappointment/rejection/{book}', 'App\Http\Controllers\BookingController@rejection')->middleware('mentor');
Route::get('mentorappointment/approval/{book}', 'App\Http\Controllers\BookingController@approval')->middleware('mentor');

// Route::post('book', 'App\Http\Controllers\BookingController@book')->name('appointment-get-public');

Route::post('contact/message', 'App\Http\Controllers\ContactusController@contactmsg');
Route::get('/support_index', 'App\Http\Controllers\ContactusController@supportstutus')->name('support_index')->middleware('admin');
Route::get('/support', 'App\Http\Controllers\ContactusController@index')->name('support')->middleware('admin');
Route::get('/support/process/{contactus}', 'App\Http\Controllers\ContactusController@update')->middleware('admin');
Route::get('/support/done/{contactus}', 'App\Http\Controllers\ContactusController@done')->middleware('admin');
Route::get('/support/destroy/{contactus}', 'App\Http\Controllers\ContactusController@destroy')->middleware('admin');

Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');
Route::get('/adminsearch', 'App\Http\Controllers\SearchController@adminsearch')->name('adminsearch');
// Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

Route::get('ip_details', 'App\Http\Controllers\UserController@ip_details');


//////////////////Admin Routes//////////////////////
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin')->middleware('superadmin');
Route::get('/admin/datatable', 'App\Http\Controllers\AdminController@admindatatable')->name('admindatatable')->middleware('superadmin');
Route::post('/admin/store', 'App\Http\Controllers\AdminController@store')->middleware('superadmin');
Route::get('/admin/delete/{user}', 'App\Http\Controllers\AdminController@destroy')->middleware('admin');
Route::get('admin/edit/{user}', 'App\Http\Controllers\AdminController@edit')->middleware('superadmin');
Route::put('admin/{user}', 'App\Http\Controllers\AdminController@update')->middleware('superadmin');
Route::put('admin/profile/{user}', 'App\Http\Controllers\AdminController@updateprofile')->middleware('admin');

//////////////////mentor Routes//////////////////////
Route::get('/mentor', 'App\Http\Controllers\MentorController@index')->name('mentor')->middleware('admin');
Route::get('/mentor/datatable', 'App\Http\Controllers\MentorController@mentordatatable')->name('mentordatatable')->middleware('admin');
Route::post('/mentor/store', 'App\Http\Controllers\MentorController@store')->middleware('admin');
Route::get('mentor-register', 'App\Http\Controllers\MentorController@mentorRegister')->name('mentor-register');
Route::post('/mentor/storePublic', 'App\Http\Controllers\MentorController@storePublic');
Route::get('/mentor/delete/{user}', 'App\Http\Controllers\MentorController@destroy')->middleware('auth');
Route::get('mentor/edit/{user}', 'App\Http\Controllers\MentorController@edit')->middleware('admin');
Route::put('mentor/{user}', 'App\Http\Controllers\MentorController@update')->middleware('admin');
Route::put('mentor/profile/{user}', 'App\Http\Controllers\MentorController@updateprofile')->middleware('auth');

//////////////////mentor Routes//////////////////////
Route::get('/appointment', 'App\Http\Controllers\AppointmentController@index')->name('appointment')->middleware('mentor');
// Route::get('/mentor/datatable', 'App\Http\Controllers\MentorController@mentordatatable')->name('mentordatatable')->middleware('admin');
Route::post('/appointment/store', 'App\Http\Controllers\AppointmentController@store')->middleware('mentor');
Route::get('/appointment/edit', 'App\Http\Controllers\AppointmentController@edit')->middleware('mentor');
Route::post('/appointment/check', 'App\Http\Controllers\AppointmentController@check')->name('appointment-check')->middleware('mentor');
Route::post('/appointment/update', 'App\Http\Controllers\AppointmentController@updateTime')->name('appointment-update')->middleware('mentor');


//////////////////user Routes//////////////////////
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user')->middleware('admin');
Route::get('/user/datatable', 'App\Http\Controllers\UserController@userdatatable')->name('userdatatable')->middleware('admin');
Route::post('/user/store', 'App\Http\Controllers\UserController@store')->middleware('admin');
Route::get('/user/delete/{user}', 'App\Http\Controllers\UserController@destroy')->middleware('auth');
Route::get('user/edit/{user}', 'App\Http\Controllers\UserController@edit')->middleware('admin');
Route::put('user/{user}', 'App\Http\Controllers\UserController@update')->middleware('admin');
Route::put('user/profile/{user}', 'App\Http\Controllers\UserController@updateprofile')->middleware('auth');

//////////////////Post Routes//////////////////////
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post')->middleware('admin');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->middleware('admin');
Route::get('post/delete/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->middleware('admin');
Route::get('post/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->middleware('admin');
Route::put('post/{post}', [App\Http\Controllers\PostController::class, 'update'])->middleware('admin');

//////////////////Department Routes//////////////////////
Route::get('/department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department')->middleware('admin');
Route::post('/department/store', [App\Http\Controllers\DepartmentController::class, 'store'])->middleware('admin');
Route::get('department/delete/{department}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->middleware('admin');

//////////////////logs//////////////////////
Route::get('/logs', 'App\Http\Controllers\LogsController@index')->name('logs')->middleware('superadmin');

//////////////////import-export//////////////////////
Route::get('file-import-export', [App\Http\Controllers\UserController::class, 'fileImportExport'])->middleware('admin');
Route::post('file-import', [App\Http\Controllers\UserController::class, 'fileImport'])->name('file-import')->middleware('admin');
Route::get('file-export', [App\Http\Controllers\UserController::class, 'fileExport'])->name('file-export')->middleware('admin');

