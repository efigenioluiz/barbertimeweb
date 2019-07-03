<?php

namespace App\Http\Controllers;

use App\Atendimento;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function listar(){
        if (parent::privilegio() == 0) { return view('main'); }

        $atendimentos=Atendimento::all();
        
        return view('atendimento');
        // return view('atendimento')->with('atendimentos',$atendimentos);
    }
    public function liberar(){
        if (parent::privilegio() == 0) { return view('main'); }

        $atendimentos=Atendimento::all();
        
        return view('liberarHorario');
    }
}
