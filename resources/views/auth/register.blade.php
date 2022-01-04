@extends('layouts.auth')

@section('content')
    <div class="register-box" style="transform: translateY(-30px)">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="javascript:voide()" class="h1"><b>Hotel</b>aria</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Registre uma nova assinatura</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" placeholder="Nome completo">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email">
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
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
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
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="Digite novamente a senha">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password_confirmation')
                            <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">

                        <div class="col-4 offset-md-8">
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <a href="{{ route('login') }}" class="btn btn-block btn-danger">
                        <i class="fa fa-key mr-2"></i>
                        Eu já sou membro
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
