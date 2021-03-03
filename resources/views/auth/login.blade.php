@extends('layouts.app')
@section('body')
  <body class="login-page sidebar-collapse"> 
@endsection

@section('content')
<div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url({{ asset('img/header.jpg') }})"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-header text-center">
                    <div class="logo-container">
                        <img src="C:\Users\Eduardo\Downloads\Template\ark\logomain.png" alt="" id="logomain">
                    </div>
                     <p><h3>Login</h3></p>
                </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons users_circle-08"></i>
                        </span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        </span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">
                        Entrar
                </button>
                <div class="pull-center">
                  <h6>
                    <a href="{{ route('register') }}" class="link">Criar Conta</a>
                  </h6>
                </div>
                
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>>
@endsection
