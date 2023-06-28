@extends('layouts.merge.auth')
@section('title', 'Entrar')
@section('content')
    <div class="container py-5 h-100">

        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="/site/img/draw2.svg" class="img-fluid"
                    alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Endereço de Email</label>
                        <input type="email" name="email" id="form1Example13" class="form-control form-control-lg"
                            value="{{ old('email') }}" required autofocus />

                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4 position-relative">
                        <label class="form-label" for="form1example23">Palavra-passe</label>
                        <input name="password" type="password" id="form1example23" class="form-control form-control-lg" required autocomplete="current-password">
                    
                        <div class="eye-icon">
                            <img src="eye.png" id="eye" alt="eye" style="width: 1.5rem; height: 1.5rem; margin-top: 1.9rem;" onclick="visualizarSenha()">
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>
                    </div>
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <a class="text-primary" href="{{ route('password.request') }}">Esqueceu a sua Palavra-Passe?</a>
                    </div>

                </form>


            </div>
        </div>
    </div>
@endsection
