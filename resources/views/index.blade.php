@extends('layouts.app')

@section('content')
<div class="container-fluid mycontainer-fluid bg-black">
    <div class="container mycontainer text-center">
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('images/postlab.png')}}" class="post-logo img-responsive" id="imageLogo">
                <div style="margin-top: 80px;">
                    <h1>Digital Post Made Tangible</h1>
                    <p class="help-block text-info">Want to know more<i class="fa fa-question" aria-hidden="true"></i> <a href="{{ route('how') }}">Yes</a> <br/> OR </p>
                    <a href="{{route('login')}}" class="btn btn-default">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection