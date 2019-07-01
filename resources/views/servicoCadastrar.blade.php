@extends('principal')
@section('script')
<script type="text/javascript">

    // Eventos da Página
    $(document).ready(function() {

        // Botão Mais Tempo do Curso
        $("#bt_mais").click(function() {

            var val = parseInt($("#it_tempo").val());

            if(val < 6) {
                val = val + 1;
            }

            $("#it_tempo").attr('value', val);

             // $("#div_cmd").load('rotinas/setTimeMonitoring.php', {dados:parseInt(val)}, ready());
        });

        // Botão Menos Tempo do Curso
        $("#bt_menos").click(function() {

            var val = parseInt($("#it_tempo").val());

            if(val > 1) {
                val = val - 1;
            }

            $("#it_tempo").attr('value', val);

            // $("#div_cmd").load('rotinas/setTimeMonitoring.php', {dados:parseInt(val)}, ready());
        });
    });
</script>

@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/navalha.png') }}" >
        &nbsp;Cadastrar Serviços
</div>
@stop

@section('conteudo')

<h3> SERVIÇOS </h3>

<div class='row'>
	<form action="{{ action('ServicoController@salvar') }}" method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >
		<input type="hidden" name="cadastrar" value="C">	
		
		<div class='col-sm-4' style="text-align: center">
			<Button  type="submit"  class="btn btn-primary btn-block">
			<b>Cadastrar Novo Serviço</b>
			</a>
		</div>
		<br>
		<br>
		<br>
		<div class="center"  >
			<div class="col-sm-4">
				<label>Nome: </label>
				<input type="text" name="nome" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label>Valor: </label>
				<input step="0.01" type="number" name="valor" class="form-control">
				</div> 
				<div  class="col-sm-2">
            <label>Tempo (Horas): </label>
            <div class="input-group number-spinner">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default" data-dir="up" id="bt_menos">
						<span class="glyphicon glyphicon-minus"></span>
					</button>
				</span>
				<input type="text" class="form-control text-center" name="tempo" id="it_tempo" readonly="true" value="3">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default" data-dir="up" id="bt_mais">
						<span class="glyphicon glyphicon-plus"></span>
					</button>
				</span>
			</div>
        </div>
		</div>

	</form>
	 <br> 
</div>  
@stop
