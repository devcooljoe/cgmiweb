<?php

use App\Http\Controllers\AccountDetailController;
use App\Http\Controllers\AudioMessageController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroBannerController;
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
Route::get('/audio-sermon', [WelcomeController::class, 'audio_sermon'])->name('audio-sermon');
Route::get('/pictures', [WelcomeController::class, 'gallery'])->name('pictures');
Route::get('/library', [WelcomeController::class, 'book'])->middleware('auth')->name('book');
Route::get('/contact-us', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/donate', [WelcomeController::class, 'donate'])->name('donate');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('/contact', ContactController::class);
Route::resource('/newsletter', NewsletterController::class);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resources([
        '/accountDetail' => AccountDetailController::class,
        '/book' => BookController::class,
        '/message' => MessageController::class,
        '/audioMessage' => AudioMessageController::class,
        '/gallery' => GalleryController::class,
        '/heroBanner' => HeroBannerController::class,
        '/event' => EventController::class,
    ]);
});
