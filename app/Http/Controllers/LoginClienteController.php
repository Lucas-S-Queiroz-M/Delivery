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
    public function login(){
        echo 'Realizar login';
    }
    /**
     * Ralizar o logout
     */
    public function logout(){
        return view('login');
    }
}
