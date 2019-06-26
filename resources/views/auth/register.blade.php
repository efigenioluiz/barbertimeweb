@extends('layouts.app')

@section('cabecalho')
<div id="m_texto">
        <img src=" {{ url('/img/registrop_ico.png') }}" >
        &nbsp;Registro Usuário
</div>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"><b>{{ __('Novo Registro - Dados do Usuário') }}</b></div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        @if ($errors->has('name'))
                            <div class="alert alert-danger">
                                <strong>[Entrada Inválida] O nome do usuário não pode conter mais que 255 caracteres!</strong>
                            </div>
                        @endif

                        @if ($errors->has('email'))
                            <div class="alert alert-danger">
                                <strong>[Entrada Inválida] Já existe um usuário cadastro para o E-MAIL informado!</strong>
                            </div>
                        @endif

                        @if ($errors->has('password'))
                            <div class="alert alert-danger">
                                <strong>[Entrada Inválida] A SENHA deve possuir ao menos de 6 caracteres e ser igual a digitada na confirmação!</strong>
                            </div>
                        @endif

                        @if ($errors->has('cpf'))
                            <div class="alert alert-danger">
                                <strong>[Entrada Inválida] Já existe um usuário cadastrado para o CPF informado!</strong>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">CPF</label>
                            <div class="col-md-6">
                                <input type="text" id="cpf" name="cpf" class="form-control" value="{{ old('cpf') }}">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Usuário</label>
                             <div class="col-md-6">
                                <select id="tipo" name="tipo" class="form-control" required>
                                    <option disabled="true" selected="true"></option>
                                    <option>1 - Aluno</option>
                                    <option>2 - Professor</option>
                                </select>
                            </div> 
                        </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <b> {{ __('Efetuar Registro') }} </b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
