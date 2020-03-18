<?php

namespace App\Http\Controllers;

use App\customer;
use App\customer_restaurant;
use App\customer_restaurants;
use App\customer_rooms;
use App\journey;
use App\restaurant;
use App\User;
use Illuminate\Http\Request;

class restaurantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function restaurant()
    {
        $restaurant=restaurant::all();
        return view('restaurant',compact('restaurant'));
    }

    public function storeRestaurant(Request $request)
    {

        $request->validate([
            'email' => 'string|email|max:255',
            'date'=>'date|after:today',
            'time'=>'required',

        ]);

        $users = User::all();

        $guests = customer::all();

//        $cats=customer_rooms::all();
        $customers = customer_restaurant::all();

        $customer = new customer();
        $customer->name = Request('name');
        $customer->email = Request('email');
        $customer->phone = Request('phone');
        $customer->country = Request('country');


        $restaurant = new customer_restaurant();
//        $restaurant->phone = Request('phone');
        $restaurant->email = Request('email');
        $restaurant->date = Request('date');
        $restaurant->time = Request('time');
        $restaurant->No_of_person = Request('No_of_person');
        $restaurant->Drinks = Request('Drinks');
        $restaurant->Foods = Request('Foods');

        $priceDrinks=restaurant::where('Drinks',$restaurant->Drinks)->get();
        $priceFoods=restaurant::where('Foods',$restaurant->Foods)->get();

        foreach ($priceDrinks as $item=>$value)
        {
//            dd($value->Price_of_drinks);
            $drink=$value->Price_of_drinks;
//            dd($drink);
            $restaurant->total_price=$drink;

        }

        foreach ($priceFoods as $price=>$value)
        {
//            dd($value->Price_of_foods);
            $food=$value->Price_of_foods;
            $restaurant->total_price=$food;

//            dd($food);
        }

        if ( $restaurant->Drinks != '' &&   $restaurant->Foods != '')
        {
            $restaurant->total_price=$drink+$food;

        }





        foreach ($users as $user)
        {
            if ($restaurant->email == $user->email)
            {
                $customerRequest = customer::where('email', $restaurant->email)->get();
                foreach ($customerRequest as $key => $value)
                {
//                    foreach ($customers as $customer)
//                    {
//                        if ($restaurant->date == $customer->date && $restaurant->No_of_person == $customer->No_of_person)
//                        {
//                            return back()->withInput($request->input())->withErrors(['* Sorry, This table is not valid in the date you want', 'The Message']);
//                        }
//                    }
                    $restaurant->customer_id = $value->id;
                    $restaurant->save();
                    return view('checkRestaurant', compact('restaurant','customer'));
                }
            }
//            elseif (!auth()->user()->isLogin())
//            {
//                return redirect('/register');
//            }
        }
//        foreach ($guests as $guest)
//        {
//            if ($restaurant->date == $guest->date && $restaurant->No_of_table == $guest->No_of_table)
//            {
//                return back()->withInput($request->input())->withErrors(['* Sorry, This table is not valid in the date you want', 'The Message']);
//            }
//        }

        $userId = user::where('email', $restaurant->email)->get();

        foreach ($userId as $item => $idU)
        {
            $customer->user_id=$idU->id;
            $customer->name=$idU->name;
            $customer->country='Egypt';
        }


        $customer->save();
        $customerRequest = customer::where('email', $restaurant->email)->get();
        foreach ($customerRequest as $key => $value)
        {
            $restaurant->customer_id = $value->id;
            $restaurant->save();

            return view('checkRestaurant', compact('restaurant','customer'));

        }



    }

    public function deleteReservationTable($id)
    {
        $reservation = customer_restaurant::all()->find($id);
        $reservation->delete();

        return redirect('/')->withErrors(['* This reservation is canceled', 'The Message']);
    }
}
