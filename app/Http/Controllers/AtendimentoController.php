<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function listar(){
        $atendimentos=Atendimento::all();
        return view('atendimento')->with('atendimentos',$atendimentos);
    }
}
