<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EstateController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\FlyersController;
use App\Http\Controllers\InspectionController;


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

Auth::routes(['register'=>false]);

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/estates', [HomeController::class, 'estates'])->name('estates');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/about/our-founders', [HomeController::class, 'founders'])->name('about.founders');
Route::get('/about/president', [HomeController::class, 'president'])->name('about.president');
Route::get('/about/chairman', [HomeController::class, 'chairman'])->name('about.chairman');
Route::get('/services', [HomeController::class, 'services'])->name('service');
Route::get('/flyers', [HomeController::class, 'downloads'])->name('downloads');
Route::get('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::get('/gallery/pictures', [HomeController::class, 'pictures'])->name('pictures');
Route::get('/gallery/videos', [HomeController::class, 'videos'])->name('videos');
Route::get('/estates/south-east', [HomeController::class, 'southEast'])->name('southEast');
Route::get('/estates/south-south', [HomeController::class, 'southSouth'])->name('southSouth');
Route::get('/estates/south-west', [HomeController::class, 'southWest'])->name('southWest');
Route::get('/estates/northern', [HomeController::class, 'northCentral'])->name('northCentral');
Route::get('/vacancy', [CareerController::class, 'create'])->name('career.create');
Route::post('/vacancy/store', [CareerController::class, 'store'])->name('career.store');

Route::get('/backoffice/estate/create', [EstateController::class, 'create'])->name('estate.create');
Route::get('/backoffice/estate/index', [EstateController::class, 'index'])->name('estate.index');

Route::post('/backoffice/estate/store', [EstateController::class, 'store'])->name('estate.store');

Route::post('/backoffice/region/store', [RegionController::class, 'store'])->name('region.store');


Route::get('/backoffice/region/create', [RegionController::class, 'create'])->name('region.create');
Route::get('/backoffice/region/index', [RegionController::class, 'index'])->name('region.index');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/backoffice/affiliates', [AffiliateController::class, 'index'])->name('backoffice.affiliates');
    Route::get('/backoffice/affiliates/create', [AffiliateController::class, 'create'])->name('backoffice.affiliates.create');
    Route::get('/backoffice/affiliates/{name}/{id}', [AffiliateController::class, 'edit'])->name('backoffice.affiliates.edit');
    Route::post('/backoffice/affiliates/store', [AffiliateController::class, 'store'])->name('backoffice.affiliates.store');
    Route::delete('/backoffice/affiliates/delete/{id}', [AffiliateController::class, 'destroy'])->name('backoffice.affiliates.destroy');

    Route::get('/backoffice/department', [DepartmentController::class, 'index'])->name('backoffice.department');
    Route::get('/backoffice/department/create', [DepartmentController::class, 'create'])->name('backoffice.department.create');
    Route::post('/backoffice/department/store', [DepartmentController::class, 'store'])->name('backoffice.department.store');


    Route::get('/backoffice/flyers', [FlyersController::class, 'index'])->name('backoffice.flyers');
    Route::get('/backoffice/flyers/create', [FlyersController::class, 'create'])->name('backoffice.flyers.create');
    Route::post('/backoffice/flyers/store', [FlyersController::class, 'store'])->name('backoffice.flyers.store');
    Route::delete('/backoffice/flyers/delete/{id}', [FlyersController::class, 'destroy'])->name('backoffice.flyers.destroy');
    Route::post('/backoffice/flyers/status/{id}', [FlyersController::class, 'status'])->name('backoffice.flyers.status');

    Route::get('/backoffice/inspections', [InspectionController::class, 'index'])->name('backoffice.inspection');
    Route::get('/backoffice/inspections/create', [InspectionController::class, 'create'])->name('backoffice.inspection.create');
 
    Route::get('/backoffice/roles', [RolesController::class, 'index'])->name('backoffice.roles');
});
Route::post('/inspections/store', [InspectionController::class, 'store'])->name('inspection.store');

