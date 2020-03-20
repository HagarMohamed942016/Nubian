<?php

namespace App\Http\Controllers;

use App\customer;
use App\customer_rooms;
use App\room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Array_;


class indexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $rooms = DB::table('rooms')
//            ->groupBy('type')
//            ->get();
        $rooms = room::select('type')->distinct('type')->get();
        $reservations=DB::table('customer_rooms')->groupBy()->get();
        $reservation=customer_rooms::all();
        return view ('index',compact('rooms','reservations','reservation'));

    }

    public function home()
    {
//        $rooms = DB::table('rooms')
//            ->groupBy('type')
//            ->get();
        $rooms = room::select('type')->distinct('type')->get();
        return view ('index',compact('rooms'));
    }



    public function storeRoom(Request $request)
    {

        $request->validate([
            'email' => 'string|email|max:255',
            'check_in'=>'date|after:today',
            'check_out'=>'date|after:check_in',
        ]);


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


        $prices = room::where('type', $reservation->type)->get();
        foreach ($prices as $price => $typeRoom)
        {
            $totalPrice = $typeRoom->Price;
            $reservation->total_price = $totalPrice * 1.1;
//            dd($value->Price);
        }
//        dd($value->Price);

//        dd($reservation->email,$reservation->No_of_room,$customer->name,$customer->email,$reservation->check_in,$users);

//        dd($value->Price,$totalPrice,$totalPrice*1.1,$users);

//        $reservation->total_price = $totalPrice * 1.1;

///////////////////////////////////////////////////////////////////////////////////////////////


        $customersEmail=customer::all();

//        $userEmail = User::where('email', $request->email)->get();
        $usersEmail=User::all();

        foreach ($usersEmail as  $name => $title)
        {
            $arrayUser[]= $title->email;   // print all users email that register
        }


        foreach ($cats as $key => $value)
        {
            $arrayNumberOfRoom[]= $value->No_of_room;
            $arrayCheckIn[]=$value->check_in;
            $arrayCheckOut[]=$value->check_out;
        }


        foreach ($customersEmail as $emails => $cust)
        {
            $arrayCustomer[]= $cust->email;

        }


        //// If the user reserve more than a time
        //// The user's info is saved in customer table

        for ($i=0; $i < $title->id; $i++)
        {
             if ($request->email == $arrayUser[$i])
             {
//                 dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser ,$arrayUser[$i]);
                 for ($j=0; $j < $value->id; $j++)
                 {
                     if ($request->No_of_room == $arrayNumberOfRoom[$j] && $request->check_in >= $arrayCheckIn[$j] && $request->check_out <= $arrayCheckOut[$j])
                     {
                         return back()->withInput($request->input())->withErrors(['* This room is not valid in this date', 'The Message']);
                     }
//                     dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser ,$arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);

                 }

                 for ($k=0; $k < $cust->id; $k++)
                 {
                     if ($request->email == $arrayCustomer[$k])
                     {
                         $customerEmail = customer::where('email', $reservation->email)->get();

                         foreach ($customerEmail as $ky => $it)
                         {
                             $reservation->customer_id = $it->id;
                             $reservation->save();

                             return view('checkRoom', compact('reservation',  'userEmail',  'cats',  'customer'));
                         }

                     }
//                     dd($usersEmail, $title->id,  $title->email, $arrayUser ,$arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);
                 }

             }

        }

        //// If the user first a time reserve
        ////  To save the user info. in customer table

        for ($i=0; $i < $title->id; $i++)
        {
            if ($request->email == $arrayUser[$i])
            {
//                 dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser ,$arrayUser[$i]);
                for ($j = 0; $j < $value->id; $j++)
                {
                    if ($request->No_of_room == $arrayNumberOfRoom[$j] && $request->check_in >= $arrayCheckIn[$j] && $request->check_out <= $arrayCheckOut[$j])
                    {
                        return back()->withInput($request->input())->withErrors(['* This room is not valid in this date', 'The Message']);
                    }
//                     dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser ,$arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);

                }

                for ($k = 0; $k < $cust->id; $k++)
                {
                    if ($request->email != $arrayCustomer[$k])
                    {
                        $userEmail = User::where('email', $request->email)->get();

                        foreach ($userEmail as $value => $item)
                        {
                            $customer->user_id = $item->id;
                            $customer->save();
                        }

                        $customerEmail = customer::where('email', $request->email)->get();

                        foreach ($customerEmail as $ky => $it)
                        {
                            $reservation->customer_id = $it->id;
                            $reservation->save();

                            return view('checkRoom', compact('reservation', 'userEmail', 'cats', 'customer'));
                        }

                    }
//                    dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser, $arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);
                }
//                dd($usersEmail, $title->id, $item->email, $title->email, $arrayUser, $arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);

            }
//            dd($usersEmail, $title->id,  $title->email, $arrayUser, $arrayUser[$i], $arrayNumberOfRoom, $arrayCheckIn, $arrayCheckOut, $arrayCustomer, $cust->id);
        }

/////////////////////////////////////////////////////////////////////////

    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
//        $data = DB::table('rooms')
//            ->where($select, $value)
//            ->groupBy($dependent)
//            ->get();


        $data = room::select($dependent)->where($select,$value)->get();

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
