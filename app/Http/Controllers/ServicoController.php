<?php

namespace App\Http\Controllers;

use Request as Request;
use App\Servico;

class ServicoController extends Controller
{
    public function listar(){

        //barbeiro ==1 cliente ==0;
        if (parent::privilegio() == 0) { return view('main'); }

        $servico = Servico::all();
        return view('servico')->with('servico', $servico);

    }
    public function listarPrincipal(){

        if (parent::privilegio() == 0) { return view('main'); }

        return view('servicoCadastrar');

    }
        
    public function cadastrar(){

        //barbeiro ==1 cliente ==0;
        if (parent::privilegio() == 0) { return view('main'); }

        return view('servicoCadastrar');

    }
    public function salvar() {
        if (parent::privilegio() == 0) { return view('main'); }

        if(Request::input('nome')!= null and Request::input('valor') != null ){
            $objServico = new Servico();
            $objServico->nome = Request::input('nome');
            $objServico->valor = Request::input('valor');
            $tempoInt= explode('/',Request ::input('tempo') );
            $objServico->tempo=$tempoInt[0]; 
            $objServico->save();

            return view('main');    
        }else{
            //return '<div class="alert alert-danger" role="alert">[ERRO] Campus Inválido!</div>';
            $msg="Campos Inválidos!, Tente Novamente.";
            return view('messagebox')->with('tipo', 'alert alert-warning')
            ->with('titulo', 'OPERAÇÃO INVÁLIDA')
            ->with('msg', $msg)
            ->with('acao', "/servico/cadastrar");
        }
        return view('servico');
        // $niveis = NivelModel::orderBy('id')->get();
        // return view('cursoCadastrar')->with('niveis', $niveis);
    }

    public function editar(){
        return view('main');
    }

    public function remover($id){
        if (parent::privilegio() == 0) { return view('main'); }

        $servico = Servico::find($id);
        if(is_numeric($id)) {
            if(empty($servico)) {
                $msg = "Serviço não encontrado para o ID=$id!";
                return view('messagebox')->with('tipo', 'alert alert-warning')
                         ->with('titulo', 'OPERAÇÃO INVÁLIDA')
                         ->with('msg', $msg)
                         ->with('acao', "/servico");
             }
        }
        
        return view('servicoRemover')->with('servico', $servico);
    }

    public function confirmar($id) {
        if (parent::privilegio() == 0) { return view('main'); }

        $servico = Servico::find($id);

        if(empty($servico)) {
                return "<h2>[ERRO]: Serviço não encontrado para o ID=".$id."!</h2>";
        }

        $servico->delete();

        return redirect()->action('ServicoController@listar');
    }
}
