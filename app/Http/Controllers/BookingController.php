<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;

class BookingController extends Controller
{
    //

    public function index() {
        $car_booking = CarBooking::all();
        return view('booking.index', ['car_booking' => $car_booking ]);
    }

    public function show($id) {
        $car_booking_details = CarBookingDetails::find($id);
        return view('booking.show', ['car_booking_id' => $car_booking_details]);
    }

    public function create()
    {
        $cars = Car::all();
        return view('booking.create', ['cars' => $cars ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'mobile' => 'required|max:12',
            'address_line_1' => 'required|min:3',
            'address_line_2' => 'required|min:3',
         
        ]);

        $allRequest = $request->all();
        $car_booking = new CarBooking();
        $car_booking->name = $allRequest['name'];
        $car_booking->email = $allRequest['email'];
        $car_booking->save();

        $bookingDetails = new CarBookingDetails();
        $bookingDetails->mobile = $allRequest['mobile'];
        $bookingDetails->start_date = $allRequest['start_date'];
        $bookingDetails->end_date = $allRequest['end_date'];
        $bookingDetails->address_line_1 = $allRequest['address_line_1'];
        $bookingDetails->address_line_2 = $allRequest['address_line_2'];
        $bookingDetails->booking_id = $car_booking->id;
        $bookingDetails->save();

        /*
         * Using sessions
         * */
        $request->session()->put('bookingDetails', $bookingDetails);
        $request->session()->put('name', $car_booking->name);

        return redirect()->route('thankyou');
    }
}
