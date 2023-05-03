<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\RolesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/affiliates', [HomeController::class, 'affiliates'])->name('affiliates');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/vacancy', [CareerController::class, 'create'])->name('career.create');
Route::post('/vacancy/store', [CareerController::class, 'store'])->name('career.store');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/backoffice/affiliates', [AffiliateController::class, 'index'])->name('backoffice.affiliates');
    Route::get('/backoffice/affiliates/create', [AffiliateController::class, 'create'])->name('backoffice.affiliates.create');
    Route::post('/backoffice/affiliates/store', [AffiliateController::class, 'store'])->name('backoffice.affiliates.store');

    Route::get('/backoffice/roles', [RolesController::class, 'index'])->name('backoffice.roles');
});
