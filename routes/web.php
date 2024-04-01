<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//******* For Frontend section******** //
Route::get('/index', [FrontendController::class, 'index'])->name('index');
Route::get('/men', [FrontendController::class, 'men'])->name('men');
Route::get('/cosmetic', [FrontendController::class, 'cosmetic'])->name('cosmetic');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/sunglasses', [FrontendController::class, 'sunglasses'])->name('sunglasses');
Route::post('/save-contact', [FrontendController::class, 'saveContact']);
