<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PackageSizeRequest;
use App\Http\Requests\PackageDetailsRequest;
use App\Http\Requests\PackageDateRequest;
use Illuminate\Routing\Redirector;

class PackageController extends Controller
{

    /**
     * Create a new controller instance.
     *  
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function packageSize(PackageSizeRequest $request)
    {
        $inputs = Input::all();
        $request->session()->put('package_size', $inputs ['package']);

        return redirect()->route('details');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function packageDetails(Request $request)
    {
        return view('package-details', ['request' => $request]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function packageDetailsSubmit(PackageDetailsRequest $request)
    {

        $inputs = Input::all();

        $request->session()->put('package_location', $inputs ['location']);
        $request->session()->put('package_destination', $inputs ['destination']);
        $request->session()->put('package_description', $inputs ['description']);

        return redirect()->route('final');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function packageDate(Request $request)
    {
        return view('package-date', ['request' => $request]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function packageDateConfirmation(PackageDateRequest $request)
    {
        $inputs = Input::all();

        $request->session()->put('package_delivery_date', $inputs ['date']);
        return redirect()->route('pay');
    }

}
