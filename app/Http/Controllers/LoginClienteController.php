<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClienteController extends Controller {
    /**
     * Abre a tela de login
     */

    public function login() {
        return view('login');
    }
    /**
     * Tenta realizar o login
    */
    public function logar(Request $r){

        if ($r->email == 'teste@teste.com' && $r->senha == '123456')

            return redirect()->route('Cardapio');
        else
            return redirect()->back()->with('erro', 'Login ou senha incorreta');
     }

    /**
     * Ralizar o logout
     */
    public function logout(){
        return view('login');
    }
}
