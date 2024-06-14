<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ComponentController;

use App\Http\Controllers\RenderingController;
use App\Http\Controllers\RenderingExempleController;

use App\Http\Controllers\PassingController;
use App\Http\Controllers\PassingExempleController;


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
Route::get('/packageComponent', [PackageController::class, 'index'])->name('packageComponent.index');

Route::get('/RV_Component_index'       , [ComponentController::class       , 'index'])->name('RV_Component.index');
Route::get('/RV_Rendering_index'       , [RenderingController::class       , 'index'])->name('RV_Rendering.index');
Route::get('/RV_RenderingExemple_index', [RenderingExempleController::class, 'index'])->name('RV_RenderingExemple.index');
//---
Route::get('/RV_Passing_index'         , [PassingController::class         , 'index'])->name('RV_Passing.index');
Route::get('/RV_PassingExemple_index'  , [PassingExempleController::class  , 'index'])->name('RV_PassingExemple.index');

//---

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

require __DIR__.'/auth.php';
