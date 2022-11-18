<?php

use App\Http\Controllers\AccountDetailController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\WelcomeController;
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

Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/sermon', [WelcomeController::class, 'sermon'])->name('sermon');
Route::get('/library', [WelcomeController::class, 'book'])->name('book');
Route::get('/contact-us', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/donate', [WelcomeController::class, 'donate'])->name('donate');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/contact', ContactController::class);
Route::resource('/newsletter', NewsletterController::class);

Route::middleware('auth')->group(function () {
    Route::resources([
        '/accountDetail' => AccountDetailController::class,
        '/book' => BookController::class,
        '/message' => MessageController::class,
        '/event' => EventController::class,
    ]);
});

Route::middleware('admin')->get('/register', function () {
    return view('auth.register');
});
