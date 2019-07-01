@extends('principal')


@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/agenda.png') }}" style="width:90; height:90px;" >
        &nbsp;Atendimentos
</div>
@stop

@section('conteudo')

<h3> ATENDIMENTOS </h3>
<div class="row">
    <div class="col-sm-2">
        <label>Data: </label>
        <input type="date" name="data" class="form-control" placeholder="Data">
    </div> 
    <br/>
    <!-- On rows -->
    <br/>
    <br/>
    <table id="tabela" class="table table-striped table-dark">
        <thead>
            <tr class="table-active" >
                @for ($i = 1; $i <= 24; $i++)
                    <th scope="col">{{ $i}}hr</th>
                    <th scope="col">30MIN</th>
                    @if($i ==12)
                        <tr>
                        </tr>
                    @endif
                @endfor
            </tr>
        </thead>
        <tbody>
            <tr class="success">
            @for ($i = 1; $i <= 24; $i++)
                <td class="table-primary">--</td>
                <td class="table-primary">--</td>
                @if($i ==12)
                    <tr>
                    </tr>
                @endif
            @endfor
        </tbody>
    </table>







</div>
@stop
