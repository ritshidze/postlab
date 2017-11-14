@extends('layouts.app')

@section('content')
<div class="container-fluid mycontainer-fluid bg-black">
    <div class="row text-center">
        <div class="col-md-12" style="margin-top: 90px; margin-bottom: 20px;">
            <img src="{{asset('images/postlab2.png')}}" class="page-logo" id="imageLogo">
        </div>
    </div>
</div>
<br/>
<form class="" method="post" action="{{route('details')}}">

    {{ csrf_field() }}
    <div class="container text-center" style="padding-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h1>Payments here....</h1> 
            </div>
        </div>
        <br/>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                we going to do payments(PAYFAST) here.<br/>
                Hit next button and complete the package thing
            </div>
        </div>
    </div>

    <div class="container-fluid bg-black prev-next" style="margin-top: 20px;">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a href="{{ URL::previous() }}" class="btn btn-default" style="background: transparent; border: none">
                        <img src="{{asset('images/prev.png')}}" class="prev-next-btn" id="prevBtn">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h3>PREV - NEXT</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <button type="submit" class="btn btn-default" style="background: transparent; border: none">
                        <img src="{{asset('images/next.png')}}" style="max-width: 70px; max-height: 50px;" class="prev-next-btn" id="nextBtn">
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection