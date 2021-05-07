<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarClientesController extends Controller {
    //

    public function ListarClientes() {
        return view('ListarClientes');
    }
}
