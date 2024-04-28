<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BirthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\MyDocumentController;
use App\Http\Controllers\NationalIDCardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoterCardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

    //admin route
    Route::middleware('admin')->group(function () {
        Route::get('/admin_dashboard', [AdminDashboardController::class, 'index'])->name('admin_dashboard');

        //birth route
        Route::get('/birth', [BirthController::class, 'index'])->name('birth.index');

        //idcard route
        Route::get('/idcard', [NationalIDCardController::class, 'index'])->name('idcard.index');

        //voter route
        Route::get('/voter', [VoterCardController::class, 'index'])->name('voter.index');

    });

    
    //create birth route
    Route::get('/birth/create', [BirthController::class, 'create'])->name('birth.create');
    Route::post('/birth', [BirthController::class, 'store'])->name('birth.store');
    Route::post('/birth/{id}/status/{status}', [BirthController::class, 'changeStatus'])->name('birth.status');



    //document route
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
    Route::post('/voter/{id}/status/{status}', [VoterCardController::class, 'changeStatus'])->name('voter.status');

    //death route
    Route::resource('death', DeathController::class);
    Route::get('/get_id', function () {
        return view('death.get');
    });
});



//status route
// Route::post('/delivery/{id}/status/{status}', 'DeliveryController@changeStatus')->name('delivery.status');

require __DIR__.'/auth.php';
