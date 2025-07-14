<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Route;

// Page d'accueil unique
Route::get('/', [ArticleController::class, 'welcome'])->name('welcome');

// Admin dashboard
Route::get('/home_admin', function () {
    return view('home_admin');
})->middleware(['auth', 'verified'])->name('home_admin');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Contact form

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


// Articles management
Route::middleware('auth')->group(function () {
    Route::resource('articles', ArticleController::class)->except(['show']);
});

// Lecture publique d'un article
Route::get('/lecture/{id}', [ArticleController::class, 'lecture'])->name('articles.lecture');


// // Public article view
// Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/test-mail', function () {
    $data = [
        'name' => 'Test User',
        'email' => 'test@fake.com',
        'objet' => 'Test Mail',
        'message' => 'Ceci est un test.'
    ];

    Mail::to('sergiovanni100@gmail.com')->send(new ContactFormMail($data));

    return 'Mail envoyé';
});

// Authentication routes
require __DIR__.'/auth.php';