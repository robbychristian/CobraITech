<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Mail\UserApplication;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ApplicantsController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\UpdatesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ManageAdmin;

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
Route::get('/update', [WelcomeController::class, 'updates'])->name('welcome.updates');
Route::post('/submitapplication', [WelcomeController::class, 'sendApplication'])->name('welcome.submitapplication');
Route::post('/submitquery', [WelcomeController::class, 'sendQuery'])->name('welcome.query');

// Auth::routes();
Route::get('/admin-panel', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/applicants', [HomeController::class, 'applicantsView'])->name('admin.applicants');
Route::post('/deleteapplicant/{id}', [ApplicantsController::class, 'deleteApplicant'])->name('admin.deleteApplicant');
Route::get('/showapplicant/{id}', [ApplicantsController::class, 'openApplication'])->name('admin.openApplicant');
Route::get('/downloadpdf/{email}/{filename}', [ApplicantsController::class, 'downloadPdf'])->name('admin.downloadpdf');
Route::post('/replyto', [ApplicantsController::class, 'replyTo'])->name('admin.replyTo');

Route::get('/inquiries', [InquiryController::class, 'index'])->name("admin.inquiries");
Route::get('/showinquiry/{id}', [InquiryController::class, 'individualInquiry'])->name('admin.openInquiry');
Route::post('/replytoquery', [InquiryController::class, 'replyToQuery'])->name('admin.replyToQuery');

Route::get('/updates', [UpdatesController::class, 'index'])->name('admin.updates');
Route::post('/addupdate', [UpdatesController::class, 'addUpdate'])->name('admin.addUpdate');
Route::post('/deleteblog/{id}', [UpdatesController::class, 'delete'])->name('admin.deleteBlog');

Route::get('/manageadmin', [ManageAdmin::class, 'index'])->name('admin.manageadmin');
Route::post('/addAdmin', [ManageAdmin::class, 'addAdmin'])->name('admin.addadmin');
Route::post('/deleteAdmin', [ManageAdmin::class, 'deleteAdmin'])->name('admin.deleteadmin');

Route::get('/emailtemplate', function () {
    return view('mail.reply-to-query');
});

// Route::get('/email', function () {
//     Mail::to('robbychristiandeleon@gmail.com')->send(new UserApplication);
//     return new UserApplication();
// });

//Route::get('/email', [UserApplication::class, 'build']);
