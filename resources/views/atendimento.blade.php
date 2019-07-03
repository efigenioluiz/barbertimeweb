@extends('principal')


@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/agenda.png') }}" style="width:90; height:90px;" >
        &nbsp;Atendimentos
</div>
@stop

@section('conteudo')
<h1>sadasdadasds</h1>
@if(!empty($horario))
    @foreach( $horario as $dados )
        <h1>{{  $dados->data }} </h1> 
        <h1>{{  $dados->hora_inicio }} </h1> 
        <h1>{{  $dados->hora_final }} </h1>
        <?php

         $horaInicio=explode(":",$dados->hora_inicio);
         $horaFinal=explode(":",$dados->hora_final);
        ?>
        
    @endforeach
@else
    <?php
        $hora_inicio=0;
        $hora_final=0;
    ?>
    <h1> Nenhum  Horario Liberado para Hoje!</h1>
@endif
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
                <div id="celula" value="{{$i}}" >
                    <div id="hora">{{$i}}</div>
                    <div id="minuto">30</div>
                    <div id="linha">   
                    @if( $i >= intval("  $horaInicio[0] ")  && $i < intval("  $horaFinal[0] ") )
                        <div id ="colTime" style="background-color:green"></div>
                        <div id ="colTime" style="background-color:green" ></div>
                    @else
                            <div id ="colTime" ></div>
                            <div id ="colTime" ></div>
                    @endif
                    </div>
                </div>
            @endfor    
        </div>  
    </div>  
</div>
@stop

<!-- <div id="linha" style="background-color:green"></div> -->