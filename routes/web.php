<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebSettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});
Auth::routes();

Route::prefix('/dashboard')->middleware(['CheckRoles:admin'])->group(function () {
    Route::get('/', [HomeController::class, 'viewDashboard'])->name('viewDashboard');

    // Web Settings
    Route::get('/websettings', [HomeController::class, 'viewWebSetting'])->name('viewWebSetting');
    Route::post('/websettings', [WebSettingsController::class, 'updateWebSettings'])->name('updateWebSettings');
});
