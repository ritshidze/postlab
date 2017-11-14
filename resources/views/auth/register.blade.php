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
                <h1>Sign Up</h1>
                
                <div style="margin-top: 50px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" placeholder="Name" type="text" class="form-control border-radius-remover field-border" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <input id="name" placeholder="Surname" type="text" class="form-control border-radius-remover field-border" name="surname" value="{{ old('surname') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('surname') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" placeholder="Email" type="email" class="form-control border-radius-remover field-border" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" placeholder="Password" type="password" class="form-control border-radius-remover field-border" name="password" required>
                            @if ($errors->has('password'))
                            <span class="help-block form-errors">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input id="password-confirm" placeholder="Password confirm" type="password" class="form-control border-radius-remover field-border" name="password_confirmation" required>
                        </div>

                        <br/>
                        <br/>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-login">Sign In</button>
                        </div>
                        
                        <div class="form-group">
                            <a href="{{ route('login') }}" class="btn btn-default btn-login">Back to Login</a>
                        </div>
                        
                    </form>
                </div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>

@endsection
