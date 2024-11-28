<?php

use Illuminate\Support\Facades\Route;
use \App\http\controllers\AuthManager;





Route::get('/EventManagement', function () {
    return view('EventManagement');
});

Route::get('/signinsignup', function () {
    return view(view: 'signinsignup');
});

//Route::get('/features', function () {
   // return view(view: 'features');
//});
Route::get('/userprofileandhistry', function () {
    return view(view: 'userprofileandhistry');
});
// Route::get('/dashboard', function () {
//     return view(view: 'dashboard');
// });

Route::get('/', function () {
    return view(view: 'home');
})->name('home');



//Route::get('/dashboard', function () {
   // return view(view: 'home');
//})
// Route::get( () {
//     return view('home');
// })->name('home');
Route::view('/role', 'role')->name('role');
Route::view('/Eventmanagement', 'Eventmanagement')->name('Eventmanagement');
// Route::view('/home', 'home')->name('home');
Route::post('/login', [AuthManager::class , 'loginPost'])->name('login.post');
// Route::get('/registration', [AuthManager::class , 'registration'])->name('registration');

Route::post('/registration', [AuthManager::class , 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::group(['middleware'=> 'auth'], function(){

//     Route::get( '/profile', function (){
//         return "Hi";
//    });

});






//Route::get('/Tracking', function () {
    //return view(view: 'Tracking');
//});
//Route::post('register',[AuthController::class ,'register'])->name('register');

//Route::view('/layout','components.layout')->name('layout');

//Route::view('/try','try')->name("try");

//Route::view('/userslogin','userslogin');
Route::view('/registration','registration')->name('registration');
Route::view('/login','login')->name('login');
Route::view('/dashboard','dashboard')->name('dashboard');
//Route::view('/index','index');


