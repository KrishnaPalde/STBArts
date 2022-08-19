<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request){
        $booking = new Booking();
        $booking->name = $request->input('firstName') . " " . $request->input('lastName');
        $booking->email = $request->input('email');
        $booking->mobile = $request->input('mobile');
        $booking->address = $request->input('address') . " " . $request->input('address2');
        $ganesh_id = "";
        $ganesh_type = "";
        $ganesh_price = "";
        $ganesh_color = "";
        $ganesh_image = "";
        $ganesh_quantity = "";
        foreach(session()->get('cart') as $key=>$value)
        {
            $ganesh_id = $ganesh_id . $key . " ";
            $ganesh_type = $ganesh_type . $value['type'] . " ";
            $ganesh_price = $ganesh_price . $value['price'] . " ";
            $ganesh_color = $ganesh_color . $value['color'] . " ";
            $ganesh_image = $ganesh_image . $value['image'] . " ";
            $ganesh_quantity = $ganesh_quantity . $value['quantity'] . " ";
        }
        $booking->ganesh_id = $ganesh_id;
        $booking->ganesh_type = $ganesh_type;
        $booking->ganesh_price = $ganesh_price;
        $booking->ganesh_color = $ganesh_color;
        $booking->ganesh_image = $ganesh_image;
        $booking->quantity = $ganesh_quantity;
        $booking->total = session()->get('total');
        if($booking->save())
        {
            $request->session()->flush();
            return redirect()->route('cart.index')->with('BookingStatus', 'Successful');
        }
        
    }
}
