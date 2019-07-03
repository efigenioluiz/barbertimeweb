<?php

namespace App\Http\Controllers;

use Request as Request;
use App\Atendimento;
use App\Horario;


class AtendimentoController extends Controller
{
    public function listar(){
        if (parent::privilegio() == 0) { return view('main'); }


        $horario=Horario::where(' data ==');
        
        return view('atendimento')->with("horario",$horario);
        // return view('atendimento')->with('atendimentos',$atendimentos);
    }
    public function liberar(){
        if (parent::privilegio() == 0) { return view('main'); }
        
        return view('liberarHorario');
    }
    
    public function salvar(){
        if (parent::privilegio() == 0) { return view('main'); }

        //if(Request::input('data')!= null and Request::input('hora_inicio') != null and Request::input('hora_final') != null ){
            $objHorario = new Horario();
            $objHorario->data = Request::input('data');
            $objHorario->hora_inicio = Request::input('hora_inicio');
            $objHorario->hora_final = Request::input('hora_final');
            $objHorario->save();

            return view('atendimento');    
        // }else{
        //     $msg="Campos Inválidos!, Tente Novamente.";
        //     return view('messagebox')->with('tipo', 'alert alert-warning')
        //     ->with('titulo', 'OPERAÇÃO INVÁLIDA')
        //     ->with('msg', $msg)
        //     ->with('acao', "/atendimento");
        // }
        // return view('atendimento');
    }
}
