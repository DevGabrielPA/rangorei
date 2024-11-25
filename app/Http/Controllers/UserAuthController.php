<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Tabela de usuários
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; // Para autenticação automática após o cadastro

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        // Validação dos dados de entrada
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // 'confirmed' exige o campo password_confirmation no formulário
        ]);

        try {
            // Criação do usuário
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Criptografando a senha
            ]);

            // Autenticar o usuário após o cadastro
            Auth::login($user); // Faz login automaticamente após o cadastro

            // Redirecionar para a página de login com uma mensagem de sucesso
            return redirect()->route('login.page')->with('success', 'Cadastro realizado com sucesso!');

        } catch (\Exception $e) {
            // Em caso de erro, redireciona com mensagem de erro
            return back()->with('error', 'Ocorreu um erro. Tente novamente.')->withInput();
        }
    }
}
