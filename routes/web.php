<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {

    //admin
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

    //supervisor
    Route::group(['middleware' => 'role:supervisor', 'prefix' => 'supervisor', 'as' => 'supervisor.'], function () {
        Route::get('/', [SupervisorController::class, 'index'])->name('supervisor');
    });

    //keuangan
    Route::group(['middleware' => 'role:keuangan', 'prefix' => 'keuangan', 'as' => 'keuangan.'], function () {
        Route::get('/', [KeuanganController::class, 'index'])->name('keuangan');
    });
});


require __DIR__ . '/auth.php';
