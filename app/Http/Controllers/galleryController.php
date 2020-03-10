<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function gallery()
    {
        return view('gallery');
    }
}
