<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ReportController;
use App\Http\Requests\VehicleRequest;

Route::get('/', function () { return view('main'); });
//Route::get('/veiculos', function () { return view('veiculos'); });

Route::resource('vehicles', VehicleController::class);

Route::get('/relatorios/estoque', [ReportController::class, 'estoque'])->name('relatorios.estoque');
Route::get('/veiculos', [VehicleController::class, 'index'])->name('veiculos.index');

Route::get('/veiculos/create', [VehicleController::class, 'create'])->name('veiculos.create');
Route::post('/veiculos/store', [VehicleController::class, 'store'])->name('veiculo.store');

Route::get('/veiculos/edit/{id}', [VehicleController::class, 'edit'])->name('veiculo.edit');
Route::put('/veiculos/{id}', [VehicleController::class, 'update'])->name('veiculo.update');

Route::delete('/veiculos/delete/{id}', [VehicleController::class, 'destroy'])->name('veiculos.destroy');


