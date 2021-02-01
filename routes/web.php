<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AccountingController;
use App\Http\Controllers\WarehouseController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::patch('/profil', [ProfilController::class, 'update'])->name('profil.update');
    //admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/tambah-user', [UsersController::class, 'create'])->name('add.user');
        Route::post('/tambah-user', [UsersController::class, 'store'])->name('store.user');
    });

    //supervisor
    Route::group(['middleware' => 'role:supervisor', 'prefix' => 'supervisor', 'as' => 'supervisor.'], function () {
        Route::get('/', [SupervisorController::class, 'index'])->name('supervisor');
    });

    //keuangan
    Route::group(['middleware' => 'role:keuangan', 'prefix' => 'keuangan', 'as' => 'keuangan.'], function () {
        Route::get('/', [KeuanganController::class, 'index'])->name('keuangan');
    });

    //accounting
    Route::group(['middleware' => 'role:accounting', 'prefix' => 'accounting', 'as' => 'accounting.'], function () {
        Route::get('/', [AccountingController::class, 'index'])->name('accounting');
    });

    //warehouse
    Route::group(['middleware' => 'role:warehouse', 'prefix' => 'gudang', 'as' => 'warehouse.'], function () {
        Route::get('/', [WarehouseController::class, 'index'])->name('warehouse');
    });
});


require __DIR__ . '/auth.php';
