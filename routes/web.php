<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{pagesController,ContactsController};
use App\Mail\ContactsMessageCreated;

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

Route::get('/', [pagesController::class, 'home'])->name('rout_path');

Route::get('/email-test', function(){
	return new ContactsMessageCreated('kulapa', 'sebastienkulapa@gmail.com', 'Merci pour Laracarte');
})->name('rout_test_path');

Route::get('/about', [pagesController::class, 'about'])->name('about_path');

Route::get('/contact', [ContactsController::class, 'create'])->name('contact_path');

Route::post('/contact', [ContactsController::class, 'store'])->name('contact_path');

// Route::get('/', function () {
//     return view('welcome');
// });
