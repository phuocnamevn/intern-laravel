<?php

use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;

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
Route::get('/admin/user/create', [CreateController::class, 'index']);
Route::post('/admin/user/create', [CreateController::class, 'validationForm']);
Route::get('/admin/user', function () {
    return view('admin.user');
});
