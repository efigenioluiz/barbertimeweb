@extends('principal')

@section('cabecalho')
<!-- <div id="m_texto">
        <img src=" {{ url('/img/navalha.png') }}" >
        &nbsp;Cadastrar Serviços
</div> -->
@stop

@section('conteudo')

<h3> HORÁRIO </h3>

<div class='row'>
	<form  method="POST">
		<input type="hidden" name="_token" value="{{{ csrf_token() }}}" >
		<input type="hidden" name="cadastrar" value="C">	
	
		<div class="center"  >
			<div class="col-sm-4">
				<label>Date: </label>
				<input type="date" name="data" class="form-control">
            </div>
            
		    <div >
                <div class="col-sm-2">
                    <label>Horário Inicio: </label>
                    <input step="00:00" type="time" name="hora"value="07:00" class="form-control">
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-2">
                    <label>Horário final: </label>
                    <input step="00:00" type="time"value="00:00" name="hora" class="form-control">
                </div>
            </div>
            <br>
            <br>
            <div class='col-sm-4' style="text-align: center">
			    <Button  type="submit"  class="btn btn-success btn-block">
			    <b>Liberar Horário</b>
                </a>
            </div>
		</div>
	</form>
	 <br> 
</div>  
@stop
