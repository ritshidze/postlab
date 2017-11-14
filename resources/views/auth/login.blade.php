@extends('layouts.app')

@section('content')
<div class="container-fluid mycontainer-fluid">
    <div class="container mypagecontainer text-center">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-6">

                <img src="{{asset('images/postlab1.png')}}" class="page-logo">
                <br/>
                <br/>
                <h1>Login</h1>

                <div style="margin-top: 50px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" placeholder="Email" class="form-control border-radius-remover field-border" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" placeholder="Password" class="form-control border-radius-remover field-border" name="password" required>
                            @if ($errors->has('password'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <a class="pull-right forgot-password" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-login">Login</button>
                        </div>

                        <div class="form-group">
                            <a href="{{route('register')}}" class="btn btn-primary btn-register">Sign Up</a>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
@endsection