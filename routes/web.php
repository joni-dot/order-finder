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
Route::get('vendors', 'Vendors\ListVendorsController');
Route::get('vendors/create', 'Vendors\ShowVendorCreationFormController');
Route::get('vendors/{vendor}/edit', 'Vendors\ShowVendorEditFormController');
Route::patch('vendors/{vendor}', 'Vendors\UpdateVendorController');
Route::post('vendors/', 'Vendors\StoreVendorController');
Route::delete('vendors/', 'Vendors\DeleteVendorController');

// Carriers...
Route::get('carriers', 'Carriers\ListCarriersController');
Route::get('carriers/create', 'Carriers\ShowCarrierCreationFormController');
Route::get('carriers/{carrier}/edit', 'Carriers\ShowCarrierEditFormController');
Route::patch('carriers/{carrier}', 'Carriers\UpdateCarrierController');
Route::post('carriers/', 'Carriers\StoreCarrierController');
Route::delete('carriers/', 'Carriers\DeleteCarrierController');

// Mode of deliveries...
Route::get('mode-of-deliveries', 'ModeOfDeliveries\ListModeOfDeliveriesController');
Route::get('mode-of-deliveries/create', 'ModeOfDeliveries\ShowModeOfDeliveryCreationFormController');
Route::get('mode-of-deliveries/{modeOfDelivery}/edit', 'ModeOfDeliveries\ShowModeOfDeliveryEditFormController');
Route::patch('mode-of-deliveries/{modeOfDelivery}', 'ModeOfDeliveries\UpdateModeOfDeliveryController');
Route::post('mode-of-deliveries/', 'ModeOfDeliveries\StoreModeOfDeliveryController');
Route::delete('mode-of-deliveries/', 'ModeOfDeliveries\DeleteModeOfDeliveryController');

// Orders
Route::get('orders', 'Orders\ListOrdersController');
Route::get('orders/{order}/edit', 'Orders\ShowOrderEditFormController');
Route::patch('orders/{order}', 'Orders\UpdateOrderController');
Route::get('orders/create', 'Orders\ShowOrderCreationFormController');
Route::post('orders/', 'Orders\StoreOrderController');
Route::delete('orders/', 'Orders\DeleteOrderController');