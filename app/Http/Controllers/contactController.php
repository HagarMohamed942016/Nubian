<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact()
    {
        return view('contact');
    }

    public function storeContact(Request $request)
    {
        $contact = new contact();
        $contact->name = Request('name');
        $contact->email = Request('email');
        $contact->phone = Request('phone');
        $contact->message = Request('text');
        $contact->save();

        return redirect('/contact')->withErrors(['* This Message is send', 'The Message']);

    }

    public function about()
    {
        return view('about');
    }
}
