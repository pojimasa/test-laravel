<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'showConfirmation'])->name('show.confirmation');
Route::post('/save-gender', [ContactController::class, 'save'])->name('save_gender');
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/admin/search', 'AdminController@search')->name('admin.search');
