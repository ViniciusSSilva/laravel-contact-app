<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Login;
use App\Livewire\Contact;
use App\Livewire\ContactForm;

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

Route::get('/', Dashboard::class);
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::prefix('contact')
    ->middleware('auth')
    ->group(function ()
{
    Route::get('/create', ContactForm::class);
    Route::get('/{id}/edit', ContactForm::class);
    Route::get('/{id}', Contact::class);
});

Route::fallback(function() {
    return redirect('/');
});
