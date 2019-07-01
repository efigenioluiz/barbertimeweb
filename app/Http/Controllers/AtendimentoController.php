<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function listar(){
        return view('atendimento');
    }
}
