<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WereHouseController;
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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/profil', [ProfilDashboard::class, 'index'])->name('profil');
    Route::patch('/profil', [ProfilDashboard::class, 'update'])->name('profil.update');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    });

    //supervisor
    Route::group(['middleware' => 'role:supervisor,admin', 'prefix' => 'supervisor', 'as' => 'supervisor.'], function () {
        Route::get('/', [SupervisorController::class, 'index'])->name('supervisor');
        Route::get('/add-user', [UsersController::class, 'index'])->name('add.user');
        Route::post('/add-user', [UsersController::class, 'store'])->name('store.user');
    });

    //finance
    Route::group(['middleware' => 'role:finance', 'prefix' => 'finance', 'as' => 'finance.'], function () {
        Route::get('/', [FinanceController::class, 'index'])->name('finance');
    });

    //accounting
    Route::group(['middleware' => 'role:accounting', 'prefix' => 'accounting', 'as' => 'accounting.'], function () {
        Route::get('/', [AccountingController::class, 'index'])->name('accounting');
    });

    //Gudang
    Route::group(['middleware' => 'role:accounting', 'prefix' => 'accounting', 'as' => 'gudang.'], function () {
        Route::get('/', [WhereHouseController::class, 'index'])->name('accounting');
    });
});


require __DIR__ . '/auth.php';
