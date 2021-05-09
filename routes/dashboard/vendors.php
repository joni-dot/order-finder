<?php

use App\Http\Controllers\Vendors\DeleteVendorController;
use App\Http\Controllers\Vendors\ListVendorsController;
use App\Http\Controllers\Vendors\ShowVendorCreationFormController;
use App\Http\Controllers\Vendors\ShowVendorEditFormController;
use App\Http\Controllers\Vendors\StoreVendorController;
use App\Http\Controllers\Vendors\UpdateVendorController;
use Illuminate\Support\Facades\Route;

Route::get('vendors', [ListVendorsController::class, '__invoke'])->name('vendors.index');
Route::get('vendors/create', [ShowVendorCreationFormController::class, '__invoke'])->name('vendors.create');
Route::get('vendors/{vendor}/edit', [ShowVendorEditFormController::class, '__invoke'])->name('vendors.edit')->whereNumber('vendor');
Route::patch('vendors/{vendor}', [UpdateVendorController::class, '__invoke'])->name('vendors.update')->whereNumber('vendor');
Route::post('vendors/', [StoreVendorController::class, '__invoke'])->name('vendors.store');
Route::delete('vendors/', [DeleteVendorController::class, '__invoke'])->name('vendors.delete');
