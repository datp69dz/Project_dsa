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

Route::get('/ss', function () {
    return view('admin.page/traning/index');
});

Route::get('/s', function () {
    return view('admin.page/traning/edit');
});

Route::get('/demo', function () {
    return view('users.page.account.verification');
});

Route::get('/sa', function () {
    return view('users.page.account.manager-account');
});

?>
