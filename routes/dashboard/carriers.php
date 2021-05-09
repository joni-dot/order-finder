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
use Illuminate\Support\Facades\Route;

Route::get('carriers', [ListCarriersController::class, '__invoke'])->name('carriers.index');
Route::get('carriers/create', [ShowCarrierCreationFormController::class, '__invoke'])->name('carriers.create');
Route::get('carriers/{carrier:slug}/edit', [ShowCarrierEditFormController::class, '__invoke'])->name('carriers.edit');
Route::patch('carriers/{carrier:slug}', [UpdateCarrierController::class, '__invoke'])->name('carriers.update');
Route::post('carriers/', [StoreCarrierController::class, '__invoke'])->name('carriers.store');
Route::delete('carriers/', [DeleteCarrierController::class, '__invoke'])->name('carriers.delete');

// Mode of transports...
Route::get('carriers/{carrier:slug}/mode-of-transports', [ListCarrierModeOfTransportsController::class, '__invoke'])->name('carriers.mode-of-transports.index');
Route::get('carriers/{carrier:slug}/mode-of-transports/create', [ShowCarrierModeOfTransportCreationFormController::class, '__invoke'])->name('carriers.mode-of-transports.create');
Route::get('carriers/{carrier:slug}/mode-of-transports/edit/{modeOfTransport}', [ShowCarrierModeOfTransportEditFormController::class, '__invoke'])->name('carriers.mode-of-transports.edit')->whereNumber('modeOfTransport');
