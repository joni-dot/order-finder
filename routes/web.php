<?php

use App\Http\Controllers\Carriers\DeleteCarrierController;
use App\Http\Controllers\Carriers\ListCarriersController;
use App\Http\Controllers\Carriers\ModeOfTransports\ListCarrierModeOfTransportsController;
use App\Http\Controllers\Carriers\ModeOfTransports\ShowCarrierModeOfTransportCreationFormController;
use App\Http\Controllers\Carriers\ModeOfTransports\ShowCarrierModeOfTransportEditFormController;
use App\Http\Controllers\Carriers\ShowCarrierCreationFormController;
use App\Http\Controllers\Carriers\ShowCarrierEditFormController;
use App\Http\Controllers\Carriers\StoreCarrierController;
use App\Http\Controllers\Carriers\UpdateCarrierController;
use App\Http\Controllers\Orders\DeleteOrderController;
use App\Http\Controllers\Orders\ListOrdersController;
use App\Http\Controllers\Orders\ShowOrderCreationFormController;
use App\Http\Controllers\Orders\ShowOrderEditFormController;
use App\Http\Controllers\Orders\UpdateOrderController;
use App\Http\Controllers\Vendors\DeleteVendorController;
use App\Http\Controllers\Vendors\ListVendorsController;
use App\Http\Controllers\Vendors\ShowVendorCreationFormController;
use App\Http\Controllers\Vendors\ShowVendorEditFormController;
use App\Http\Controllers\Vendors\StoreVendorController;
use App\Http\Controllers\Vendors\UpdateVendorController;
use Illuminate\Support\Facades\Route;

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

// Vendors...
Route::get('vendors', [ListVendorsController::class, '__invoke'])->name('vendors.index');
Route::get('vendors/create', [ShowVendorCreationFormController::class, '__invoke'])->name('vendors.create');
Route::get('vendors/{vendor}/edit', [ShowVendorEditFormController::class, '__invoke'])->name('vendors.edit')->whereNumber('vendor');
Route::patch('vendors/{vendor}', [UpdateVendorController::class, '__invoke'])->name('vendors.update')->whereNumber('vendor');
Route::post('vendors/', [StoreVendorController::class, '__invoke'])->name('vendors.store');
Route::delete('vendors/', [DeleteVendorController::class, '__invoke'])->name('vendors.delete');

// Carriers...
Route::get('carriers', [ListCarriersController::class, '__invoke'])->name('carriers.index');
Route::get('carriers/create', [ShowCarrierCreationFormController::class, '__invoke'])->name('carriers.create');
Route::get('carriers/{carrier}/edit', [ShowCarrierEditFormController::class, '__invoke'])->name('carriers.edit')->whereNumber('carrier');
Route::patch('carriers/{carrier}', [UpdateCarrierController::class, '__invoke'])->name('carriers.update')->whereNumber('carrier');
Route::post('carriers/', [StoreCarrierController::class, '__invoke'])->name('carriers.store');
Route::delete('carriers/', [DeleteCarrierController::class, '__invoke'])->name('carriers.delete')->whereNumber('carrier');

// Carrier mode of transports...
Route::get('carriers/{carrier}/mode-of-transports', [ListCarrierModeOfTransportsController::class, '__invoke'])->name('carriers.mode-of-transports.index')->whereNumber('carrier');
Route::get('carriers/{carrier}/mode-of-transports/create', [ShowCarrierModeOfTransportCreationFormController::class, '__invoke'])->name('carriers.mode-of-transports.create')->whereNumber('carrier');
Route::get('carriers/{carrier}/mode-of-transports/edit/{modeOfTransport}', [ShowCarrierModeOfTransportEditFormController::class, '__invoke'])->name('carriers.mode-of-transports.edit')->whereNumber('carrier')->whereNumber('modeOfTransport');

// Orders...
Route::get('orders', [ListOrdersController::class, '__invoke'])->name('orders.index');
Route::get('orders/{order}/edit', [ShowOrderEditFormController::class, '__invoke'])->name('orders.edit')->whereNumber('order');
Route::patch('orders/{order}', [UpdateOrderController::class, '__invoke'])->name('orders.update')->whereNumber('order');
Route::get('orders/create', [ShowOrderCreationFormController::class, '__invoke'])->name('orders.create');
Route::post('orders/', [StoreOrderController::class, '__invoke'])->name('orders.store');
Route::delete('orders/', [DeleteOrderController::class, '__invoke'])->name('orders.delete');
