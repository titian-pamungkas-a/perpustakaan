<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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

Route::get('/', function () {
    return redirect()->route('anggota');
});
Route::controller(AnggotaController::class)->group(function(){
    Route::get('anggota', 'index')->name('anggota');
    Route::get('anggota/create', 'create')->name('anggota.create');
    Route::post('anggota/store', 'store')->name('anggota.store');
    Route::get('anggota/{id}/show', 'show')->name('anggota.show');
    Route::get('anggota/{id}', 'edit')->name('anggota.edit');
    Route::put('anggota/{id}', 'update')->name('anggota.update');
    Route::delete('anggota/{id}/delete', 'delete')->name('anggota.delete');
    
});
