<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;

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

Route::get('/', function () {
    return redirect('/login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/dashboard', [EnrollController::class, 'index'])->name('dashboard')->middleware(['auth:sanctum', 'verified']);

Route::get('/course', [CourseController::class, 'index'])->name('course')->middleware(['auth:sanctum', 'verified']);

Route::get('/course/{id}', [CourseController::class, 'show'])->name('detail')->middleware(['auth:sanctum', 'verified']);

Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
    return view('about');
})->name('about');

Route::post('/enroll/{id}', [EnrollController::class, 'store'])->middleware(['auth:sanctum', 'verified']);
Route::post('/enroll/remove/{id}', [EnrollController::class, 'unenrolled'])->middleware(['auth:sanctum', 'verified']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/course', function () {
//     return view('course');
// })->name('course');
