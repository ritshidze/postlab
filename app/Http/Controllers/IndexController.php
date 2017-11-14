<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class IndexController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application landing page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware(['auth', 'guest']);
        return view('index');
    }

    /**
     * Show the application about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $this->middleware(['auth', 'guest']);
        return view('about-us');
    }

    /**
     * Show the application frequently asked questions.
     *
     * @return \Illuminate\Http\Response
     */
    public function faqs()
    {
        $this->middleware(['auth', 'guest']);
        return view('faqs');
    }

    /**
     * Show the application howItWorks.
     *
     * @return \Illuminate\Http\Response
     */
    public function howItWorks()
    {
        $this->middleware(['auth', 'guest']);
        return view('how-it-works');
    }

    /**
     * Show the application pricingAndPayments.
     *
     * @return \Illuminate\Http\Response
     */
    public function pricingAndPayments()
    {
        $this->middleware('auth');
        return view('pricing-and-payments');
    }

    /**
     * Show the application deliveries.
     *
     * @return \Illuminate\Http\Response
     */
    public function deliveries()
    {
        $this->middleware('auth');
        return view('deliveries');
    }

    /**
     * Contact Us.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(ContactUsRequest $request)
    {

        $this->middleware(['auth', 'guest']);

        $inputs = Input::all();

        $contact = new ContactUs();
        $contact->name = $inputs['name'];
        $contact->surname = $inputs['surname'];
        $contact->email = $inputs['email'];
        $contact->cell = $inputs['cell'];
        $contact->message = $inputs['message'];
        $contact->save();

        Mail::to($inputs['email'])->send(new Contact($inputs));

        return back()->with("message", "Message sent successfully, we'll get back to you");
    }

}
