<?php

namespace App\Http\Controllers;

use Request as Request;
use App\Atendimento;
use App\Horario;


class AtendimentoController extends Controller
{
    public function listar(){
        if (parent::privilegio() == 0) { return view('main'); }
        $dia = date("d");
        $mes = date("m");
        $ano = date("Y");
        $horario=\DB::select("select * from horarios where day(data) = $dia and month(data) = $mes and year(data) = $ano");
        //$horario=Horario::all();

        
        return view('atendimento')->with('horario',$horario);

    }
    public function liberar(){
        if (parent::privilegio() == 0) { return view('main'); }
        
        return view('liberarHorario');
    }
    
    public function salvar(){
        if (parent::privilegio() == 0) { return view('main'); }

        if(Request::input('data')!= null and Request::input('hora_inicio') != null and Request::input('hora_final') != null ){
            $dia = date("d");
            $mes = date("m");
            $ano = date("Y");
            if(empty(\DB::select("select * from horarios where day(data) = $dia and month(data) = $mes and year(data) = $ano"))){
                $objHorario = new Horario();
                $objHorario->data = Request::input('data');
                $objHorario->hora_inicio = Request::input('hora_inicio');
                $objHorario->hora_final = Request::input('hora_final');
                $objHorario->save();

                return view('atendimento');
            }else{
                $msg="Horário já liberado para o Hoje";
                return view('messagebox')->with('tipo', 'alert alert-danger')
                ->with('titulo', 'OPERAÇÃO INVÁLIDA')
                ->with('msg', $msg)
                ->with('acao', "/atendimento");
            }
                return view('atendimento');
                    
        }else{
            $msg="Campos Inválidos!, Tente Novamente.";
            return view('messagebox')->with('tipo', 'alert alert-warning')
            ->with('titulo', 'OPERAÇÃO INVÁLIDA')
            ->with('msg', $msg)
            ->with('acao', "/atendimento");
        }
        return view('atendimento');
    }
}
