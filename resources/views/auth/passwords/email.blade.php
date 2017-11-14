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
                <h1>Password Recovery</h1>

                <div style="margin-top: 50px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        @if (session('status'))
                        <div class="alert alert-success form-group border-radius-remover">
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control border-radius-remover field-border" placeholder="Email Address" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-login">Submit</button>
                        </div>

                        <div class="form-group">
                            <a href="{{route('login')}}" class="btn btn-primary btn-register">Back to Login</a>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
@endsection
