<?php

use Illuminate\Support\Facades\Route;

// Import controllers
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index'])->name('landing');
Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::group([
	'prefix' => '/tutors',
	'as' => 'tutors.'
], function () {
	Route::get('/', [TeachersController::class, 'index'])->name('index');
});

Route::group([
	'prefix' => '/contact',
	'as' => 'contact.'
], function () {
	Route::get('/', [ContactController::class, 'create'])->name('create');
});
