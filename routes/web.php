<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\ProviderController;
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



Route::get('/',[PrinterController::class, 'index']);
Route::get('/index',[PrinterController::class, 'index'])->name('index');
Route::post('/printer',[PrinterController::class, 'store'])->name('printer.create');
Route::get('/printer',[PrinterController::class, 'listPrinter'])->name('printer.list');
Route::get('/printer/edit/{id}',[PrinterController::class, 'edit'])->name('printer.edit');
Route::patch('/printer/{id}',[PrinterController::class, 'update'])->name('printer.update');
Route::delete('/printer/{id}',[PrinterController::class, 'delete'])->name('printer.delete');
Route::get('/provider',[ProviderController::class, 'index'])->name('company.list');
Route::get('/provider/create',[ProviderController::class, 'create'])->name('provider.create');
Route::post('/provider',[ProviderController::class, 'store'])->name('provider.store');
