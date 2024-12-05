<?php

use Illuminate\Support\Facades\Route;
use \App\http\controllers\AuthManager;
use \App\http\controllers\AttendanceController;
Route::get('/signinsignup', function () {
    return view(view: 'signinsignup');
});
Route::get('/userprofileandhistry', function () {
    return view(view: 'userprofileandhistry');
});
Route::view('/notificationalert', view: 'notificationalert')->name('notificationalert');
Route::view('/userprofile', view: 'userprofile')->name('userprofile');
Route::view('/tracking', 'tracking')->name('tracking');
Route::view('/home', 'home')->name('home');
Route::view('/role', 'role')->name('role');
Route::view('/Eventmanagement', 'Eventmanagement')->name('Eventmanagement');
Route::post('/login', [AuthManager::class , 'loginPost'])->name('login.post');
Route::post('/registration', [AuthManager::class , 'registrationPost'])->name('registration.post');
Route::post('/tracking', [AttendanceController::class, 'trackingPost'])->name('tracking.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::group(['middleware'=> 'auth'], function(){
});
//Route::post('register',[AuthController::class ,'register'])->name('register');

//Route::view('/layout','components.layout')->name('layout');

//Route::view('/try','try')->name("try");

//Route::view('/userslogin','userslogin');
Route::view('/registration','registration')->name('registration');
Route::view('/login','login')->name('login');
Route::view('/dashboard','dashboard')->name('dashboard');

