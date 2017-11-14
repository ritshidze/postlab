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
<form class="" method="post" action="{{route('size')}}">
    {{ csrf_field() }}
    <?php $package = $request->session()->get('package_size'); ?>
    <div class="container text-center" style="padding-bottom: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h1>Select Package Size</h1> 
            </div>
        </div>
        <br/>
        <div class="row package-row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                @if ($errors->has('package'))
                <p class="bg-danger" style="padding: 10px; color: #ff0000;">
                    <strong>{{ $errors->first('package') }}</strong>
                </p>
                @endif
                <a href="#" class="package-size packageSize <?php echo $package == 1 ? 'select-package img' : ''; ?>" id="1">
                    <img src="{{asset('images/1kg.png')}}" class="package-size" id="1kg">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 10px;">
                    <a href="#" class="package-size packageSize <?php echo $package == 6 ? 'select-package img' : ''; ?>" id="6">
                        <img src="{{asset('images/6kg.png')}}" class="package-size" id="6kg">
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 10px;">
                    <img src="{{asset('images/select.png')}}" class="" id="package-select">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding: 10px;">
                    <a href="#" class="package-size packageSize <?php echo $package == 123 ? 'select-package img' : ''; ?>" id="123">
                        <img src="{{asset('images/1-3kg.png')}}" class="package-size" id="123kg">
                    </a>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>

        <div class="row package-row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <a href="#" class="package-size packageSize <?php echo $package == 326 ? 'select-package img' : ''; ?>" id="326">
                    <img src="{{asset('images/3-6kg.png')}}" class="package-size" id="326kg">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

    <input type="hidden" value="{{$package}}" name="package" id="package" required="">

    <div class="container-fluid bg-black prev-next" style="margin-top: 20px;">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <button class="btn btn-default" disabled="" style="background: transparent; border: none">
                        <img src="{{asset('images/prev.png')}}" class="prev-next-btn" id="prevBtn">
                    </button>
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