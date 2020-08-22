@extends('layouts.admin.master')

@section('classes_body', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            {{ config('app.name', 'Laravel') }}
        </div>

        <div class="card">
            <div class="card-body login-card-body rounded">
                <p class="login-box-msg">Login untuk masuk ke dashboard</p>
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" placeholder="Email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <div class="invalid-feedback">
                                {!! $errors->first('email') !!}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Kata Sandi">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>

                <p class="mt-4 text-center">
                    <a href="#">Lupa kata sandi?</a>
                </p>
            </div>
        </div>
    </div>
@stop
