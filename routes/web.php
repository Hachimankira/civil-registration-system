<?php

use App\Http\Controllers\BirthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\MyDocumentController;
use App\Http\Controllers\NationalIDCardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoterCardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//birth route
Route::resource('birth', BirthController::class);

//document route
Route::resource('/documents', MyDocumentController::class);
Route::get('/documents', [MyDocumentController::class, 'index'])->name('documents');
Route::get('/doc', function () {
    return view('document.get');
});
// Route::get('/documents/{id}', [MyDocumentController::class, 'show'])->name('documents');

//national idcard route
Route::resource('idcard', NationalIDCardController::class);
Route::get('/add', function () {
    return view('nationalIDCard.get');
});
Route::post('/idcard/{id}/status/{status}', [NationalIDCardController::class, 'changeStatus'])->name('idcard.status');

//voter route
Route::resource('voter', VoterCardController::class);
Route::get('/vote', function () {
    return view('voter.get');
});

//death route
Route::resource('death', DeathController::class);
Route::get('/get_id', function () {
    return view('death.get');
});

//status route
// Route::post('/delivery/{id}/status/{status}', 'DeliveryController@changeStatus')->name('delivery.status');

require __DIR__.'/auth.php';
