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

use Modules\User\Events\DisplayMessage;

Route::prefix('user')->group(function() {
    event(new DisplayMessage());
    Route::get('/', 'UserController@index');
});
Route::prefix('user')->group(function() {
    Route::get('/sendmail', 'EmailController@sendMail');
});
