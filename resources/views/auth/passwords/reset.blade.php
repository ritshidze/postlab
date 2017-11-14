@extends('layouts.app')

@section('content')
<div class="container-fluid mycontainer-fluid">
    <div class="container mypagecontainer text-center">
        <div class="col-lg-3"></div>
        <div class="col-md-6">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <img src="{{asset('images/postlab1.png')}}" class="page-logo">
            <br/>
            <br/>
            <h1>Reset Password</h1>

            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" placeholder="Email" type="email" class="form-control border-radius-remover field-border" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" placeholder="New password" type="password" class="form-control border-radius-remover field-border" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input id="password-confirm" placeholder="Confirmation new password" type="password" class="form-control border-radius-remover field-border" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default btn-login">Reset Password</button>
                </div>

                <div class="form-group">
                    <a href="{{route('login')}}" class="btn btn-primary btn-register">Back to Login</a>
                </div>

            </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
@endsection
