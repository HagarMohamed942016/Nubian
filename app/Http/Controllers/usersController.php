<?php

namespace App\Http\Controllers;

use App\customer;
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

    public function  roomTable()
    {
        $rooms=room::all();
        return view('Admin.roomTable',compact('rooms'));
    }

    public function createRoom()
    {
        return view('Admin.createRoom');
    }

    public function storeRoom()
    {
        $room=new room();
        $room->No_of_room=Request('no_of_room');
        $room->type=Request('type');
        $room->Price=Request('Price');
        $room->save();
        $rooms=room::all();

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
        $room=room::all()->find($id);
        $room->No_of_room=Request('no_of_room');
        $room->type=Request('type');
        $room->Price=Request('Price');
        $room->save();
        $rooms=room::all();
        return view('Admin.roomTable',compact('rooms'));
    }

    public function deleteRoom($id)
    {
        $room=room::all()->find($id);
        $room->delete();
        $rooms=room::all();
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

    public function storeRestaurant()
    {
        $restaurant=new restaurant();
        $restaurant->No_of_table=Request('No_of_table');
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
        $restaurant->No_of_table=Request('No_of_table');
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
        $restaurant=room::all()->find($id);
        $restaurant->delete();
        $restaurants=restaurant::all();
        return view('Admin.restaurantTable',compact('restaurants'));
    }


}
