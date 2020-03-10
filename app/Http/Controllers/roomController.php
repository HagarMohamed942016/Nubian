<?php

namespace App\Http\Controllers;

use App\customer;
use App\customer_rooms;
use App\room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class roomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function room()
    {
        $rooms = DB::table('rooms')
            ->groupBy('type')
            ->get();
        return view ('room',compact('rooms'));
    }



    public function storeRoom(Request $request)
    {

        $request->validate([
            'email' => 'string|email|max:255',
            'check_in'=>'date|after:today',
            'check_out'=>'date|after:check_in',
        ]);


        $users = User::all();

        $cats = customer_rooms::all();

        $customer = new customer();
        $customer->name = Request('name');
        $customer->email = Request('email');
        $customer->phone = Request('phone');
        $customer->country = Request('country');

        $reservation = new customer_rooms();
        $reservation->email = Request('email');
        $reservation->check_in = Request('check_in');
        $reservation->check_out = Request('check_out');
        $reservation->type = Request('type');
        $reservation->No_of_room = Request('No_of_room');


        $price = room::where('type', $reservation->type)->get();
        foreach ($price as $item => $value)
        {

            $totalPrice = $value->Price;
            $reservation->total_price = $totalPrice * 1.1;

//            dd($value->Price);

        }
//        dd($value->Price);


//        dd($reservation->email,$reservation->No_of_room,$customer->name,$customer->email,$reservation->check_in,$users);

//        dd($value->Price,$totalPrice,$totalPrice*1.1,$users);

//        $reservation->total_price = $totalPrice * 1.1;


//        $customerEmail=$reservation->email;
        $userEmail = User::where('email', $request->email)->get();

        foreach ($userEmail as $value=>$item)
        {
            $email=$item->email;
        }



        if ($item['email'] == $request->email ) {
//            dd($userEmail,$request->email,$reservation->email,$reservation->No_of_room,$customer->name,$customer->email,$reservation->check_in,$users);

            foreach ($cats as $cat)
            {
//                        dd($request->email);

                if ($reservation->No_of_room == $cat->No_of_room && $reservation->check_in >= $cat->check_in && $reservation->check_out <= $cat->check_out) {
                    return back()->withInput($request->input())->withErrors(['* This room is not valid in this date', 'The Message']);
                }
            }
//            dd($request->email);

            $customerEmail = customer::where('email', $reservation->email)->get();


//                dd($request->email);


            foreach ($customerEmail as $key => $value)
            {
//                        dd($customerEmail);
//                    dd($request->email);

                $reservation->customer_id = $value->id;
                $reservation->save();
                return view('checkRoom', compact('reservation', 'userId', 'userEmail', 'from', 'to', 'cats', 'users', 'customer'));

            }
            if ($request->email == $value['email'] )
            {

                $reservation->customer_id = $value->id;
                $reservation->save();
                return view('checkRoom', compact('reservation', 'userId', 'userEmail', 'from', 'to', 'cats', 'users', 'customer'));


            }
            else
            {

                $customer->user_id = $item->id;

                $customer->save();
                $reservation->customer_id = $customer->id;
                $reservation->save();
                return view('checkRoom', compact('reservation', 'userId', 'userEmail', 'from', 'to', 'cats', 'users', 'customer'));

            }


        }
//        else
        elseif($userEmail != '')
        {
            return redirect('/register');
        }

//        $request->validate([
//            'email' => 'string|email|max:255',
//            'check_in'=>'date|after:today',
//            'check_out'=>'date|after:check_in',
//        ]);


    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('rooms')
            ->where($select, $value)
            ->groupBy($dependent)
            ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;


    }

    public function findPrice(Request $request)
    {

        $op=room::select('Price')->where('type',$request->type)->first();

        return response()->json($op);

    }

    public function deleteReservation($id)
    {
        $reservation=customer_rooms::all()->find($id);
        $reservation->delete();

        return redirect ('/')->withErrors(['* This reservation is canceled', 'The Message']);
    }

}
