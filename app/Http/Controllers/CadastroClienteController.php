<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroClienteController extends Controller {
    //Tela de cadastro

    public function CadastroCliente() {
        return view('CadastroCliente');
    }

}
