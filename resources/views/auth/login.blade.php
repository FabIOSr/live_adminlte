@extends('layouts.auth')

@section('content')
    <div class="login-box" style="transform: translateY(-60px)">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="javascript:void()" class="h1"><b>Hotel</b>aria</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Faça login para iniciar sua sessão</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">

                        <div class="col-4 offset-md-8">
                            <button type="submit" class="btn btn-primary btn-block">Conectar</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="{{ route('register') }}" class="btn btn-block btn-danger">
                        <i class="fas fa-id-card mr-2"></i> Registrar uma nova conta
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
