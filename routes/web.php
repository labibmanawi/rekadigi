<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ServiceController;
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

Route::get('/',[MessageController::class, 'create_message']);
Route::post('/send-message',[MessageController::class, 'send_message']);

//admin
Route::prefix('admin')->group(function (){
    Route::get('/dashboard',[DashboardController::class, 'dashboard_start']);
    Route::get('/messageInbox',[DashboardController::class, 'inbox_message']);
    Route::get('/teams',[TeamController::class, 'list_team']);
    Route::post('/insert-team',[TeamController::class, 'create_team']);
});
