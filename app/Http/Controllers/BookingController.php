<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;

class BookingController extends Controller
{
    //

    public function create()
    {
        $cars = Car::all();
        return view('booking.create', ['cars' => $cars ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'item_id' => 'required',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'mobile' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $allRequest = $request->all();
        $car_booking = new CarBooking();
        $car_booking->name = $allRequest['name'];
        $car_booking->email = $allRequest['email'];
        $car_booking->car_id = $allRequest['item_id'];
        $car_booking->save();

        $bookingDetails = new CarBookingDetails();
        $bookingDetails->address_line_1 = $allRequest['address_line_1'];
        $bookingDetails->address_line_2 = $allRequest['address_line_2'];
        $bookingDetails->mobile = $allRequest['mobile'];
        $bookingDetails->start_date = $allRequest['start_date'];
        $bookingDetails->end_date = $allRequest['end_date'];
        $bookingDetails->booking_id = $car_booking->id;
        $bookingDetails->save();
        

        /*
         * Using sessions
         * */
        $request->session()->put('bookingDetails', $bookingDetails);
        $request->session()->put('name', $car_booking->name);

        return redirect()->route('thankyou');
    }
        public function show($id)
        {
            $car_booking = CarBooking::find($id);
            return view('booking.show', ['car_booking_id' => $car_booking]);
        }
        public function index()
        {
            $car_booking
}    
}