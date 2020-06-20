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
    return view('welcome');
});


Route::get('/backend/login', function () {
    return view('backend.login');
});

Route::get('/backend/register', function () {
    return view('backend.register.signup');
});

Route::get('/backend/complaint', function () {
    return view('backend.complaint.complaintform');
});