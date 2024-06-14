<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PackageComponentController;
use App\Http\Controllers\RenderingComponentController;
use App\Http\Controllers\RenderingExempleController;
use App\Http\Controllers\PassingDataToComponentController;

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

Route::get('/componentView_index'         , [         ComponentController::class , 'index'])->name(         'componentView.index');
Route::get('/renderingComponentView_index', [RenderingComponentController::class , 'index'])->name('renderingComponentView.index');
Route::get('/RV_Rendering_index'          , [RenderingExempleController::class   , 'index'])->name('RV_Rendering.index');
//---
Route::get('/passingDataToComponent', [PassingDataToComponentController::class, 'index'])->name('passingDataToComponent.index');
Route::get('/packageComponent', [PackageComponentController::class, 'index'])->name('packageComponent.index');
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
