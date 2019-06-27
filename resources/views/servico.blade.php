@extends('principal')

@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/navalha.png') }}" >
        &nbsp;Serviços Cadastrados
</div>
@stop

@section('conteudo')

<h3> SERVIÇOS </h3>
<div class='row'>
	<div class='col-sm-8' style="text-align: center">
		<a  type="button" class="btn btn-primary btn-block">
		<b>Cadastrar Novo Serviço</b>
		</a>
	</div>
	<div class='col-sm-1' style="text-align: center">
        <button type="button" class="btn btn-default btn-block">
            <span class="glyphicon glyphicon-search"></span>
        </button>
    </div>
	 <br>
	<!-- <table class='table table-striped'>
   	<thead>
        <tr>
            <th>ID</th>
            <th>SERVIÇO</th>
            <th>VALOR</th>
            <th>TEMPO DE SERVIÇO</th>
        </tr>
    </thead>
    <tbody>
	 <tr>
		<td></td>
		<td></td>
		<td></td>
		<td>
	 </tr> -->
</div>
@stop
