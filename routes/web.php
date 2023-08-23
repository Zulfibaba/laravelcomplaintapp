<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShowController;

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
    return view('allcomplaint');
});



Route::get('/AllComplaint', [HomeController::class, 'show_complaints'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show_complaints'])->name('dashboard');
    Route::get('/complaints', [ComplaintController::class, 'index'])->name('complaint_index');
    Route::post('/complaints', [ComplaintController::class, 'create'])->name('complaint_create');
    Route::get('/complaints/edit/{id}', [ComplaintController::class, 'edit'])->name('edit_complaint');
    Route::put('/complaints/edit/{id}', [ComplaintController::class, 'update'])->name('update_complaint');
    Route::get('/complaints/delete/{id}', [ComplaintController::class, 'destroy'])->name('destroy_complaint');
    // Route::get('/allcomplaint',[ComplaintController::class , 'show'])->name
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/post/{complaint}', [HomeController::class, 'show'])->name("complaints.show");
Route::post('/post/{complaint}/comment',  [CommentController::class, 'store']);
Route::delete('/post/{id}/delete', [CommentController::class, 'destroy'])->middleware('can:admin');

require __DIR__ . '/auth.php';
