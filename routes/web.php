<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Vendors...
Route::get('vendors', 'Vendors\ListVendorsController')->name('vendors.index');
Route::get('vendors/create', 'Vendors\ShowVendorCreationFormController')->name('vendors.create');
Route::get('vendors/{vendor}/edit', 'Vendors\ShowVendorEditFormController')->name('vendors.edit');
Route::patch('vendors/{vendor}', 'Vendors\UpdateVendorController')->name('vendors.update');
Route::post('vendors/', 'Vendors\StoreVendorController')->name('vendors.store');
Route::delete('vendors/', 'Vendors\DeleteVendorController')->name('vendors.delete');

// Carriers...
Route::get('carriers', 'Carriers\ListCarriersController')->name('carriers.index');
Route::get('carriers/create', 'Carriers\ShowCarrierCreationFormController')->name('carriers.create');
Route::get('carriers/{carrier}/edit', 'Carriers\ShowCarrierEditFormController')->name('carriers.edit');
Route::patch('carriers/{carrier}', 'Carriers\UpdateCarrierController')->name('carriers.update');
Route::post('carriers/', 'Carriers\StoreCarrierController')->name('carriers.store');
Route::delete('carriers/', 'Carriers\DeleteCarrierController')->name('carriers.delete');

// Carrier mode of transports...
Route::get('carriers/{carrier}/mode-of-transports', 'Carriers\ModeOfTransports\ListCarrierModeOfTransportsController')->name('carriers.mode-of-transports.index');
Route::get('carriers/{carrier}/mode-of-transports/create', 'Carriers\ModeOfTransports\ShowCarrierModeOfTransportCreationFormController')->name('carriers.mode-of-transports.create');
Route::get('carriers/{carrier}/mode-of-transports/edit/{modeOfTransport}', 'Carriers\ModeOfTransports\ShowCarrierModeOfTransportEditFormController')->name('carriers.mode-of-transports.edit');

// Orders...
Route::get('orders', 'Orders\ListOrdersController')->name('orders.index');
Route::get('orders/{order}/edit', 'Orders\ShowOrderEditFormController')->name('orders.edit');
Route::patch('orders/{order}', 'Orders\UpdateOrderController')->name('orders.update');
Route::get('orders/create', 'Orders\ShowOrderCreationFormController')->name('orders.create');
Route::post('orders/', 'Orders\StoreOrderController')->name('orders.store');
Route::delete('orders/', 'Orders\DeleteOrderController')->name('orders.delete');
