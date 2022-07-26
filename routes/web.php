<?php

use App\Http\Controllers\UserController;
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

// Route::get('user/{user}', function(\App\Models\User $user){
//     dd($user);
//     return $user;
// });

// Route::prefix('usuarios')->group(function(){
//     Route::get('',function(){
//         return 'usuario';
//     })->name('usuarios');
//     Route::get('/{id}',function(){
//         return 'Mostrar detalhes';
//     })->name('usuariosDetalhes');
//     Route::get('/{id}/tags',function(){
//         return 'Tags do usuário';
//     })->name('usuariosTags');
// });

Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('users', [UserController::class, 'index'])->name('user.index');

Route::get('/', function () {
    return view('welcome');
})->name('home');
