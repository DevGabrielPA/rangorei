<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function store(Request $request) {
        // $cadastro = new Cadastro();

        $nomeUsuario = $request->input('nome');
        $email = $request->input('email');
        $password = $request->input('password');
        
        // $cadastro->nomeUsuario = $nomeUsuario;
        // $cadastro->email = $email;
        // $cadastro->password = $password;
        // dd($cadastro->email);
        // $cadastro->save();

        // return redirect('/');

        // dd($nomeUsuario);
        DB::insert('INSERT INTO cadastros_user (name, email, password) values(?, ?, ?)', [$nomeUsuario, $email, $password]);

        return redirect('/login');
    }
}
