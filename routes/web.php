<?php

use App\Http\Controllers\InterviewController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\ProfileController;
use App\Models\Interview;
use App\Models\Pelamar;
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
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware(['auth','isAdmin'])->group(function(){
    // Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan');
    Route::get('/jabatan/create',[JabatanController::class,'create'])->name('jabatan/create');
    Route::post('/jabatan/insert',[JabatanController::class,'store'])->name('/jabatan/insert');
    Route::get('/jabatan/show/{jabatan}',[JabatanController::class,'show'])->name('/jabatan/show');
    Route::post('/jabatan/edit{jabatan}',[JabatanController::class,'edit'])->name('/jabatan/edit');
    Route::get('/jabatan/delete{jabatan}',[JabatanController::class,'destroy'])->name('/jabatan/delete');

    Route::get('/interview/show/{interview}',[InterviewController::class,'show'])->name('interview/show');
    Route::post('/interview/edit{interview}',[InterviewController::class,'edit'])->name('interview/edit');
    Route::get('/interview/delete{interview}',[InterviewController::class,'destroy'])->name('/interview/delete');

    Route::get('/pelamar/delete{pelamar}',[PelamarController::class,'destroy'])->name('/pelamar/delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    #Form daftar
    Route::get('/pelamar/form',[PelamarController::class,'create'])->name('/pelamar/form');
    Route::post('pelamar/insert',[PelamarController::class,'store'])->name('/pelamar/insert');
    Route::get('/pelamar/show/{pelamar}',[PelamarController::class,'show'])->name('/pelamar/show');
    // Route::get('/pelamar/delete{pelamar}',[PelamarController::class,'destroy'])->name('/pelamar/delete');
    Route::get('/pelamar/accept{pelamar}',[PelamarController::class,'accept'])->name('/pelamar/accept');

    #Pelamar
    Route::get('/pelamar',[PelamarController::class,'index'])->name('pelamar');

    #Jabatan
    Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan');
    
    
    #Interview
    Route::get('/interview',[InterviewController::class,'index'])->name('interview');
});

require __DIR__.'/auth.php';
