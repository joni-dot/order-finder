<?php

use App\Http\Controllers\Orders\DeleteOrderController;
use App\Http\Controllers\Orders\ListOrdersController;
use App\Http\Controllers\Orders\ShowOrderCreationFormController;
use App\Http\Controllers\Orders\ShowOrderEditFormController;
use App\Http\Controllers\Orders\UpdateOrderController;
use Illuminate\Support\Facades\Route;

// Orders...
Route::get('orders', [ListOrdersController::class, '__invoke'])->name('orders.index');
Route::get('orders/{order}/edit', [ShowOrderEditFormController::class, '__invoke'])->name('orders.edit')->whereNumber('order');
Route::patch('orders/{order}', [UpdateOrderController::class, '__invoke'])->name('orders.update')->whereNumber('order');
Route::get('orders/create', [ShowOrderCreationFormController::class, '__invoke'])->name('orders.create');
Route::post('orders/', [StoreOrderController::class, '__invoke'])->name('orders.store');
Route::delete('orders/', [DeleteOrderController::class, '__invoke'])->name('orders.delete');
