<?php
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\InicioController;
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

Route::get('/', InicioController::class);
Route::get('/sistema', [SistemaController::class, 'sistema']);
Route::get('/categorias/mercurio', [CategoriasController::class, 'mercurio']);
Route::get('/categorias/venus', [CategoriasController::class, 'venus']);
Route::get('/categorias/tierra', [CategoriasController::class, 'tierra']);
Route::get('/categorias/marte', [CategoriasController::class, 'marte']);
Route::get('/categorias/jupiter', [CategoriasController::class, 'jupiter']);
Route::get('/categorias/saturno', [CategoriasController::class, 'saturno']);
Route::get('/categorias/urano', [CategoriasController::class, 'urano']);
Route::get('/categorias/neptuno', [CategoriasController::class, 'neptuno']);
Route::get('/categorias/pluton', [CategoriasController::class, 'pluton']);



