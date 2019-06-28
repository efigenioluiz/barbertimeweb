@extends('layouts.app')

@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/loginp_ico.png') }}" >
        &nbsp;Autenticação
</div>
@stop

@section('content')
<div class='row'>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class='col-sm-1' style="text-align: center"> </div>
        
        <div class='col-sm-3' style="text-align: left">
            <img id="ico" src="{{ url('/img/iconMain.png') }}" >
        </div>
        <div class='col-sm-4' style="text-align: left">
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <strong> [Autenticação Inválida] Usuário e Senha Incorretos!</strong>
                </div>
            @endif

            @if ($errors->has('password'))
                <div class="alert alert-danger">
                    <strong> [Autenticação Inválida] Usuário e Senha Incorretos!</strong>
                </div>
            @endif
            <br/>
            <br/>
            <br/>
            <label for="email" class="col-sm-3 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            <br>
            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Senha') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            <br>

            <!-- <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Lembrar') }}
                </label>
            </div> -->

            <button type="submit" class="btn btn-primary">
                {{ __('ENTRAR') }}
            </button>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Não lembro minha senha!') }}
            </a>


        </div>

        <div class='col-sm-2' style="text-align: center"> </div>

    </form>
</div>
@stop
