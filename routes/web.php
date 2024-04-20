<?php

use App\Http\Controllers\BirthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MyDocumentController;
use App\Http\Controllers\NationalIDCardController;
use App\Http\Controllers\ProfileController;
use App\Models\VoterCard;
use Illuminate\Support\Facades\Route;

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
Route::resource('birth', BirthController::class);
Route::resource('/documents', MyDocumentController::class);
Route::get('/documents', [MyDocumentController::class, 'index'])->name('documents');
// Route::get('/documents/{id}', [MyDocumentController::class, 'show'])->name('documents');

Route::resource('idcard', NationalIDCardController::class);
Route::resource('voter', VoterCard::class);
Route::get('/add', function () {
    return view('birthid');
});
Route::get('/doc', function () {
    return view('doc');
});
Route::get('/vote', function () {
    return view('voter');
});
require __DIR__.'/auth.php';
