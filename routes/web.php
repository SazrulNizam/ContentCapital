<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Exports\UsersExport;

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



Route::get('/', [ UserController::class, "Display" ])->name('Display');
Route::get('Export/{id}', [ UserController::class, "ExportCSV" ])->name('ExportCSV'); 



