<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;
use Laravel\Sail\Console\PublishCommand;

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

Route::get('/', [PublicController::class, "welcome"])->name('welcome');

Route::get('/servizi', [PublicController::class, "servizi"])->name('servizi');

Route::get('/contatti', [PublicController::class, "contatti"])->name('contatti');


//rotta per il form
Route::post('/contattaci/post',[PublicController::class,'postData'])->name('postData');