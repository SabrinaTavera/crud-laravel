<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CollaboratorController;
use App\Http\Controllers\ProductController;
use App\Models\Produto;

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


// Route::get('panel', function () {
//     return view('panel.colaborador.index');
// })->name('colaborador');


Route::get('panel', [App\Http\Controllers\CollaboratorController::class, 'index'])->name('colaboratos');
Route::get('collaborator/apagar/{id}', [App\Http\Controllers\CollaboratorController::class, 'destroy'])->name('collaborator.destroy');
Route::get('collaborator/inactive/index', [App\Http\Controllers\CollaboratorController::class, 'inactive'])->name('collaborator.inactive');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('colaborador', CollaboratorController::class);

// Route::get('colaborador-create', function () {
//     return view('panel.colaborador.create');
// })->name('colaborador.create');


Route::resource('product', ProductController::class);
Route::post('product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('prod.update');
Route::get('product/apagar/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('prod.destroy');
Route::get('product/inactive/index', [App\Http\Controllers\ProductController::class, 'inactive'])->name('inactive');
Route::get('product/active/{id}', [App\Http\Controllers\ProductController::class, 'active'])->name('product.active');


