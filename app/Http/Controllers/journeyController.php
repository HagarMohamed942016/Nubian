<?php

namespace App\Http\Controllers;

use App\customer;
use App\customer_journey;
use App\journey;
use App\User;
use App\Auth;
use Illuminate\Http\Request;

class journeyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function journey()
    {
        $journeys=journey::all();
        return view('journey',compact('journeys'));
    }


    public function  storeJourney(Request $request)
    {

        $request->validate([
            'email' => 'string|email|max:255',
            'date'=>'date|after:today',

        ]);

//        $journey=journey::all();

//        $user = Auth::check();

        $trip=new customer_journey();
        $trip->email=Request('email');
        $trip->Name_of_trip=Request('Name_of_trip');
        $trip->date=Request('date');
        $trip->No_of_person=Request('No_of_person');


//dd($user);



        $userEmail = User::where('email', $request->email)->get();

        foreach ($userEmail as $value=>$item)
        {
            $emailUser=$item->email;
//            dd($item->email);

//            dd($userEmail,$emailUser,$item->email);

        }

//        dd($userEmail,$emailUser,$item->email);





        if ($request->email == $emailUser)
        {

//            return redirect('/register');


//            $customerEmail = customer::where('email', $trip->email)->get();
//
//            foreach ($customerEmail as $key => $value)
//            {
//               $id=$value->id;
//            }
//            if ($request->email == $value['email'])
//            {
//                $trip->customer_id=$value->id;
//                $trip->save();
//            }
//            else
//            {
//
//            }
//            $idJourney=journey::se


            $price=journey::where('Name_of_trip',$trip->Name_of_trip)->get();

            foreach ($price as $key=>$value)
            {
                $priceTrip=$value->Price;
            $trip->total_price=($priceTrip)*($trip->No_of_person);

            }
//            dd($value->id);

            $trip->journey_id=$value->id;
            $trip->total_price=($priceTrip)*($trip->No_of_person);

            $trip->save();

            return view('checkJourney',compact('trip'));

        }
//        else
//        elseif(! auth()->user()->isLogin())

//        elseif($userEmail != '' )
//        {
//            return redirect('/register');
//        }


    }

    public function deleteJourney($id)
    {
        $trip=customer_journey::all()->find($id);
        $trip->delete();

//        return redirect('/');
        return redirect ('/')->withErrors(['* This reservation is canceled', 'The Message']);
    }

}
