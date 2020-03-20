<?php

namespace App\Http\Controllers;

use App\contact;
use App\customer;
use App\customer_journey;
use App\journey;
use Illuminate\Http\Request;
use App\User;
use App\room;
use App\customer_rooms;
use App\restaurant;
use App\customer_restaurant;



class usersController extends Controller
{
    public function index()
    {
        return view ('Admin.admin')->with ('users',User::all());
    }

    public function create()
    {
        return view ('Admin.create');
    }

    public  function  roomReservation()
    {
        $rooms=customer_rooms::all();
        $customers= customer::all();
        return view ('Admin.roomReservation',compact('rooms','customers'));
    }

    public  function  restaurantReservation()
    {
        $restaurants=customer_restaurant::all();
        $customers= customer::all();
        return view('Admin.restaurantReservation',compact('restaurants','customers'));
    }

    public function journeyReservation()
    {
        $trips=customer_journey::all();
        $customers= customer::all();
        return view('Admin.journeyReservation',compact('trips','customers'));
    }

    public function contactMessage()
    {
        $contacts=contact::all();
        $customers= customer::all();
        return view('Admin.contactMessage',compact('contacts','customers'));
    }

    public function  roomTable()
    {
        $rooms=room::all();
        return view('Admin.roomTable',compact('rooms'));
    }

    public function createRoom()
    {
        return view('Admin.createRoom');
    }

    public function storeRoom(Request $request)
    {
        $rooms=room::all();

        $room=new room();
        $room->No_of_room=Request('no_of_room');
        $room->type=Request('type');
        $room->Price=Request('Price');
        $room->save();

        return view('Admin.roomTable',compact('rooms'));
    }

    public function showRoom($id)
    {
        $room=room::all()->find($id);
        return view('Admin.showRoom',compact('room'));
    }

    public function editRoom($id)
    {
        $room=room::all()->find($id);
        return view('Admin.editRoom',compact('room'));
    }

    public function  updateRoom(Request $request, $id)
    {
        $rooms=room::all();

        $room=room::all()->find($id);
        $room->No_of_room=Request('no_of_room');
        $room->type=Request('type');
        $room->Price=Request('Price');
        $room->save();
        return view('Admin.roomTable',compact('rooms'));
    }

    public function deleteRoom($id)
    {
        $rooms=room::all();

        $room=room::all()->find($id);
        $room->delete();
        return view('Admin.roomTable',compact('rooms'));
    }

    public function  restaurantTable()
    {
        $restaurants=restaurant::all();
        return view('Admin.restaurantTable',compact('restaurants'));
    }

    public function createRestaurant()
    {
        return view('Admin.createRestaurant');
    }

    public function storeRestaurant(Request $request)
    {
        $restaurant=new restaurant();

        $restaurant->Drinks=Request('Drinks');
        $restaurant->Price_of_drinks=Request('Price_of_drinks');
        $restaurant->Foods=Request('Foods');
        $restaurant->Price_of_foods=Request('Price_of_foods');
        $restaurant->save();
        $restaurants=restaurant::all();
        return view('Admin.restaurantTable',compact('restaurants'));
    }

    public function showRestaurant($id)
    {
        $restaurant=restaurant::all()->find($id);
        return view('Admin.showRestaurant',compact('restaurant'));
    }

    public function editRestaurant($id)
    {
        $restaurant=restaurant::all()->find($id);
        return view('Admin.editRestaurant',compact('restaurant'));
    }

    public function  updateRestaurant(Request $request, $id)
    {
        $restaurant=restaurant::all()->find($id);
        $restaurant->Drinks=Request('Drinks');
        $restaurant->Price_of_drinks=Request('Price_of_drinks');
        $restaurant->Foods=Request('Foods');
        $restaurant->Price_of_foods=Request('Price_of_foods');
        $restaurant->save();
        $restaurants=restaurant::all();
        return view('Admin.restaurantTable',compact('restaurants'));
    }

    public function deleteRestaurant($id)
    {
        $restaurant=restaurant::all()->find($id);
        $restaurant->delete();
        $restaurants=restaurant::all();
        return view('Admin.restaurantTable',compact('restaurants'));
    }

    public function journeyTable()
    {
        $trips=journey::all();
        return view('Admin.journeyTable',compact('trips'));
    }

    public function createJourney()
    {
        return view('Admin.createJourney');
    }

    public function storeJourney(Request $request)
    {
        $trip=new journey();
        $trip->Name_of_trip=Request('Name_of_trip');
        $trip->Price=Request('Price');
        $trip->save();
        $trips=journey::all();
        return view('Admin.journeyTable',compact('trips'));
    }

    public function showJourney($id)
    {
        $trip=journey::all()->find($id);
        return view('Admin.showJourney',compact('trip'));
    }

    public function editJourney($id)
    {
        $trip=journey::all()->find($id);
        return view('Admin.editJourney',compact('trip'));
    }

    public function  updateJourney(Request $request, $id)
    {
        $trip=journey::all()->find($id);
        $trip->Name_of_trip=Request('Name_of_trip');
        $trip->Price=Request('Price');
        $trip->save();
        $trips=journey::all();
        return view('Admin.journeyTable',compact('trips'));
    }

    public function deleteJourney($id)
    {
        $trip=journey::all()->find($id);
        $trip->delete();
        $trips=journey::all();
        return view('Admin.journeyTable',compact('trips'));
    }


}
