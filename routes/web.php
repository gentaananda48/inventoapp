<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CFOController;
use App\Http\Controllers\GeneralManagerController;
use App\Http\Controllers\PurchasingManagerController;
use App\Http\Controllers\PurchasingController;
use App\Http\Controllers\InventoryManagerController;

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

// Home Route
Route::get('/', function () {
    return view('home');
});


// Auth Route
Auth::routes(['register'=>false]);

// Router CFO
Route::middleware('role:cfo')->resource('cfo', CFOController::class);
Route::middleware('role:cfo')->get('/cfo-list', [CFOController::class, 'list'])->name('cfolist');
Route::middleware('role:cfo')->get('/cfo/{id}/request', [CFOController::class, 'request'])->name('cforequest');

// Router General Manager
Route::middleware('role:gm')->resource('gm', GeneralManagerController::class);
Route::middleware('role:gm')->get('/gm-list', [GeneralManagerController::class, 'list'])->name('gmlist');
Route::middleware('role:gm')->get('/gm/{id}/request', [GeneralManagerController::class, 'request'])->name('gmrequest');

// Router Purchasing Manager
Route::middleware('role:pm')->resource('pm', PurchasingManagerController::class);
Route::middleware('role:pm')->get('/pm-list', [PurchasingManagerController::class, 'list'])->name('pmlist');
Route::middleware('role:pm')->get('/pm/{id}/request', [PurchasingManagerController::class, 'request'])->name('pmrequest');
// Router Purchasing
Route::middleware('role:purchasing')->resource('purchasing', PurchasingController::class);
Route::middleware('role:purchasing')->get('/purchasing-list', [PurchasingController::class, 'list'])->name('purchasinglist');
Route::middleware('role:purchasing')->get('/purchasing/{id}/request', [PurchasingController::class, 'request'])->name('purchasingrequest');

// Router Inventory Manager
Route::middleware('role:im')->resource('im', InventoryManagerController::class);
Route::middleware('role:im')->get('/im-list', [InventoryManagerController::class, 'list'])->name('imlist');
Route::middleware('role:im')->get('/im/{id}/request', [InventoryManagerController::class, 'request'])->name('imrequest');

// Hint resource im
    //Route get => im => index
    //Route get => im/create => create
    //Route post => im => store
    //Route get => im/{id} => show
    //Route put/patch => im/{id} => update
    //Route delete => im/{id} => delete
    //Route get => im/{id}/edit => edit

// Search Route
Route::get('/search', [InventoryManagerController::class, 'search'])->name('search');
 
