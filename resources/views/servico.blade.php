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
	<form action='{{ action("ServicoController@listarPrincipal") }}' method="GET">
		<div class='col-sm-4' style="text-align: center">
			<Button  type="submit"  class="btn btn-primary btn-block">
		<b>Cadastrar Serviço</b>
		</div>
	</form>
	<table class='table table-striped'>
    <thead>
        <tr>
            <th>ID</th>
            <th>SERVIÇO</th>
            <th>VALOR</th>
            <th>TEMPO</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($servico as $dados)
        <tr>
            <td>{{ $dados->id }}</td>
            <td>{{ $dados->nome }}</td>
            <td>R$ {{ $dados->valor }}</td>
            @if( $dados->tempo > 1)
            <td>{{ $dados->tempo }} HRs</td>
            @else
            <td>{{ $dados->tempo }} HR</td>
            @endif
			<td>
                <a href="{{ action('ServicoController@editar') }}"><span class='glyphicon glyphicon-pencil'></span></a>
                &nbsp;
                <a href="{{ action('ServicoController@remover') }}"><span class='glyphicon glyphicon-remove'></span></a>
            </td>
    @endforeach
    </tbody>
</table>
</div>  
@stop
