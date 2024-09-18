<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-summary', function () {
    return view('frontend.summary');
});

Route::post('/update_session/{code}', function () {
    $_SESSION['extractedText'] =  $_POST['code'];
});

Route::get('/get_session/', function () {
    return $_SESSION['extractedText'];
});

