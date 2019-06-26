<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportarController extends Controller {

    public function listar() {
        // Privilégio
        if (parent::privilegio() == 0) { return view('main'); }

        return view('importar');
    }
}
