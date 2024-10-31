<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/EventManagement', function () {
    return view('EventManagement');
});

Route::get('/signinsignup', function () {
    return view(view: 'signinsignup');
});
// Route::get('/newdog', function () {
// return view('newdog');
// });
// route::post('/newdog',
// 'App\http\controllerss\newdogFormController@newdog')
// ->name('dog.new');
// route::get('/dog' , )


Route::view('/login','login')->name("login");
Route::view('/userslogin','userslogin');
Route::view('/layout','layout');

Route::Post('/register',[AuthController::class,'register'])->name('register');
