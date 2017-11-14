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
                <h1>Package Details</h1> 
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                    <div style="text-align: left;"><label class="small">Pick Up Location</label></div>
                    <div class="input-group">
                        <input id="location" placeholder="Location" type="text" class="form-control border-radius-remover field-border" name="location" value="{{ $request->session()->get('package_location',old('location')) }}" required autofocus>
                        <span class="input-group-addon border-radius-remover field-border">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        </span>
                    </div>
                    @if ($errors->has('location'))
                    <span class="help-block form-errors">
                        <strong>{{ $errors->first('location') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                    <div style="text-align: left;"><label class="small">Package Destination</label></div>
                    <div class="input-group">
                        <input id="destination" placeholder="Destination" type="text" class="form-control border-radius-remover field-border" name="destination" value="{{ $request->session()->get('package_destination',old('destination')) }}" required autofocus>
                        <span class="input-group-addon border-radius-remover field-border">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        </span>
                    </div>
                    @if ($errors->has('destination'))
                    <span class="help-block form-errors">
                        <strong>{{ $errors->first('destination') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <div style="text-align: left;"><label class="small">Brief Description</label></div>
                    <textarea id="description" placeholder="E.g. Fragile Contents Inside" type="text" class="form-control border-radius-remover field-border" name="description" required>{{ $request->session()->get('package_description',old('description')) }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block form-errors">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-lg-2"></div>
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