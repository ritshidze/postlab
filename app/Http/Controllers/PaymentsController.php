<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
        return view('package-payments');
    }

}
