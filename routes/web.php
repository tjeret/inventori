<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pages\CashierController;
use App\Http\Controllers\Pages\ProfilController;
use App\Http\Controllers\Pages\AccountingController;
use App\Http\Controllers\Pages\FinanceController;
use App\Http\Controllers\Pages\ProductionController;
use App\Http\Controllers\Pages\SupervisorController;
use App\Http\Controllers\Pages\WareHouseController;
//
use App\Http\Controllers\RawTransactionController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\RawTypeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\TransactionMaterialController;

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__ . '/auth.php';


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
    Route::patch('/profil', [ProfilController::class, 'update'])->name('profil.update');
    Route::post('/tambah-bahan', [TransactionMaterialController::class, 'store'])->name('store');
    Route::post('/tambah', [TransactionMaterialController::class, 'index'])->name('index');
    Route::post('/supplier', [SupplierController::class, 'store'])->name('supplier');
    Route::post('/rawtransaction', [RawTransactionController::class, 'store'])->name('rawtransaction');
    Route::post('/type', [RawTypeController::class, 'store'])->name('type');
    Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe');
    Route::post('/ingridient', [IngredientController::class, 'store'])->name('ingridient');
    Route::post('/cook', [IngredientController::class, 'cook'])->name('cook');

    //admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        //
    });

    //supervisor
    Route::group(['middleware' => 'role:supervisor || admin', 'prefix' => 'supervisor', 'as' => 'supervisor.'], function () {
        Route::get('/', [SupervisorController::class, 'index'])->name('index');
        Route::get('/tambah', [SupervisorController::class, 'create'])->name('create');
    });

    //keuangan
    Route::group(['middleware' => 'role:keuangan', 'prefix' => 'keuangan', 'as' => 'keuangan.'], function () {
        Route::get('/', [FinanceController::class, 'index'])->name('index');
        Route::get('/tambah', [FinanceController::class, 'create'])->name('create');
    });

    //accounting
    Route::group(['middleware' => 'role:accounting', 'prefix' => 'accounting', 'as' => 'accounting.'], function () {
        Route::get('/', [AccountingController::class, 'index'])->name('index');
        Route::get('/tambah', [AccountingController::class, 'create'])->name('create');
    });

    //Production
    Route::group(['middleware' => 'role:production', 'prefix' => 'produksi', 'as' => 'production.'], function () {
        Route::get('/', [ProductionController::class, 'index'])->name('index');
        Route::get('/add', [ProductionController::class, 'bahan'])->name('add');
        Route::get('/tambah', [ProductionController::class, 'create'])->name('create');
    });

    //warehouse
    Route::group(['middleware' => 'role:warehouse', 'prefix' => 'gudang', 'as' => 'warehouse.'], function () {
        Route::get('/', [WareHouseController::class, 'index'])->name('index');
        Route::get('/tambah', [WareHouseController::class, 'create'])->name('create');
    });

    //cashier
    Route::group(['middleware' => 'role:warehouse', 'prefix' => 'gudang', 'as' => 'warehouse.'], function () {
        Route::get('/', [CashierController::class, 'index'])->name('index');
        Route::get('/tambah', [CashierController::class, 'create'])->name('create');
    });
});
