<?php

use App\Events\DisplayMessage;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\UsersController;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');



Auth::routes();


Route::get('/home', function (Request $request) {
    return view('home');
})->name('home');

Route::get('/dashboard', function (Request $request) {
    return view('dashboard');
})->name('dashboard');

Route::prefix('users')->name('users.')->group(function() {
    Route::get('/',[UsersController::class,'index'])->name('index');
    Route::get('getpost',[UsersController::class,'getPost'])->name('getPost');
    Route::get('edit',[ProfileController::class,'edit'])->name('editProfile');
    Route::put('update',[ProfileController::class,'update'])->name('updateProfile');
    Route::put('password',[ProfileController::class,'password'])->name('passwordProfile');
    Route::get('cart',[CartController::class,'index'])->name('cart');
    Route::get('addToCart/{id}',[CartController::class,'addToCart'])->name('addToCart');
    Route::post('update-cart',[CartController::class,'updateToCart'])->name('updateToCart');
});
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/',[AdminController::class,'index'])->name('index');
});
Route::prefix('product')->name('product.')->group(function() {
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::get('detail/product{id}',[ProductController::class,'detail'])->name('detail');

});



Route::prefix('pages')->name('pages.')->group(function() {
    Route::get('/icons',[PageController::class,'icons'])->name('icons');
    Route::get('/maps',[PageController::class,'maps'])->name('maps');
    Route::get('/notifications',[PageController::class,'notifications'])->name('notifications');
    Route::get('/tables',[PageController::class,'tables'])->name('tables');
    Route::get('/typography',[PageController::class,'typography'])->name('typography');
    Route::get('/rtl',[PageController::class,'rtl'])->name('rtl');
    Route::get('/upgrade',[PageController::class,'upgrade'])->name('upgrade');


});
