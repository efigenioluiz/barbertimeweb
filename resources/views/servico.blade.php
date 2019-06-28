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
	<form action="{{ action('ServicoController@cadastrar') }}" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >
		<input type="hidden" name="cadastrar" value="C">	
		<div class='col-sm-8' style="text-align: center">
			<Button  type="submit"  class="btn btn-primary btn-block">
			<b>Cadastrar Novo Serviço</b>
			</a>
		</div>
		<div class='col-sm-1' style="text-align: center">
			<button  type="button" class="btn btn-default btn-block">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label>Nome: </label>
				<input type="text" name="nome" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label>Valor: </label>
				<input type="number" name="valor" class="form-control">
				</div>
		</div>
	</form>
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
