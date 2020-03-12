<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
//        $rooms = DB::table('rooms')
//            ->groupBy('type')
//            ->get();
        $rooms = room::select('type')->distinct('type')->get();
        return view('index',compact('rooms'));
    }
}
