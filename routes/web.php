<?php

use App\Http\Controllers\UserAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
return view('home');
});

Route::get('/login', function(){
    return view('login');
    });

Route::get('/cadastroUsuario', function(){
        return view('cadastroUsuario');
        });



Route::get('/contato', function(){
  return view('contato');
   });
         Route::get('/cardapio', function(){
            return view('cardapio');
             });
    
             Route::get('/carrinho', function(){
                return view('carrinho');
                 });

                                      Route::get('/redefinirSenha', function(){
                                            return view('redefinirSenha');
                                             });

                                             Route::get('/loginFuncionario', function(){
                                                return view('loginFuncionario');
                                                 });

                                                 Route::prefix('usuario')->group(function () {
                                                    Route::get('/cadastro', function () {
                                                        return view('cadastroUsuario'); // Página de cadastro de usuários
                                                    })->name('usuario.cadastro');
                                                
                                                    Route::post('/cadastro', [UserAuthController::class, 'register'])->name('usuario.cadastro.post');
                                                });

                                          
