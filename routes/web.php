<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Mail\UserApplication;
use Illuminate\Support\Facades\Mail;

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

// GUEST FUNCTIONS
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.home');
Route::get('/joinus', [WelcomeController::class, 'joinUs'])->name('welcome.joinus');
Route::get('/support', [WelcomeController::class, 'support'])->name('welcome.support');
Route::post('/submitapplication', [WelcomeController::class, 'sendApplication'])->name('welcome.submitapplication');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/email', function () {
//     Mail::to('robbychristiandeleon@gmail.com')->send(new UserApplication);
//     return new UserApplication();
// });

Route::get('/email', [UserApplication::class, 'build']);
