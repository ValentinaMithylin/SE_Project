<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

// ROUTING CONTROLLERS
Route::get('/', 'PageController@showHome');
Route::get('/about', 'PageController@showAbout');

// ROUTING CONTROLLER (LOGIN & SIGN UP)
Route::get('/login', 'LoginController@Login');
Route::get('/signup', 'LoginController@Sign_up');

// USER LOGIN+LOGOUT+REGISTRATION
Route::post('/user-registration', 'UserController@Register');
Route::post('/user-login', 'UserController@Login');