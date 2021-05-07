<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginParceiroController extends Controller {
    //

    public function loginParceiro() {
        return view('loginParceiro');
    }
    /**
     * Tenta realizar o login
    */
    public function acessar(Request $r){

        // echo $r->input('email');
        if ($r->email == 'teste@teste.com' && $r->senha == '123456')

            return redirect()->route('CadastroCardapio');
        else
            return redirect()->back()->with('erro', 'Login ou senha incorreta');
     }

    /**
     * Ralizar o logout
     */
    public function sair(){
        return view('loginParceiro');
    }

}

