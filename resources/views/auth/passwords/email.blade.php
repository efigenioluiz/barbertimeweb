@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                @if (session('status'))
                    <div class="alert alert-success">
                        <strong>[OK] Você receberá um e-mail contendo instruções para recuperação da sua senha!</strong>
                    </div>
                @endif

                @if ($errors->has('email'))
                <div class="alert alert-danger">
                    <strong>[ERRO] Não há registro de usuário para o e-mail informado!</strong>
                </div>
                @endif

                <div class="card-header"><b>{{ __('Recuperação de Senha') }}</b></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Instruções') }}
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
