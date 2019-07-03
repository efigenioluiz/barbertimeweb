@extends('principal')


@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/agenda.png') }}" style="width:90; height:90px;" >
        &nbsp;Atendimentos
</div>
@stop

@section('conteudo')
<div class="row">
    <div class="col-sm-2">
        <label>Data: </label>
        <input type="date" name="data" class="form-control" placeholder="Data">
    </div> 
    <form  action="{{ action('AtendimentoController@liberar') }}" method="GET">
    <div class='col-sm-2' style="text-align: center">
			<Button  type="submit"  class="btn btn-primary btn-block">
			<b>Liberar Horário</b>
			</a>
		</div>
	</form>
    <br/>
    <br/>
    <br/>
    <br/>    
    <div id="quadro">
        <div class="row">
            @for ($i = 7; $i <= 22; $i++)
                <div id="celula" >
                    <div id="hora">{{$i}}</div>
                    <div id="minuto">30</div>
                    <div id="linha">
                        <div id ="colTime" ></div>
                        <div id ="colTime" ></div>
                    </div>
                </div>
            @endfor    
        </div>  
    </div>  
</div>
@stop

<!-- <div id="linha" style="background-color:green"></div> -->