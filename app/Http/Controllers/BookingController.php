<?php

namespace App\Http\Controllers;

use App\CarBooking;
use App\CarBookingDetails;
use Illuminate\Http\Request;
use App\Car;

class BookingController extends Controller
{
    public function index() {
        $car_booking = CarBooking::where('status', '=', 'booked')->get();
        return view('booking.index', ['car_booking' => $car_booking ]);
    }

    public function show($id) {
        $car_booking_details = CarBookingDetails::find($id);
        return view('booking.show', ['car_booking_id' => $car_booking_details]);
    }

    public function update(Request $request, $id)
    {
        try{
            //Find the user object from model if it exists
            $statusUpdate= CarBooking::findOrFail($id);

            //$request contain your post data sent from your edit from
            //$user is an object which contains the column names of your table

            //Set user object attributes
            $statusUpdate->status= $request['status'];

            // Save/update user.
            // This will will update your the row in ur db.
            $statusUpdate->save();

            return view('booking.show', ['car_booking_id' => $statusUpdate]);
        }
        catch(ModelNotFoundException $err){
            //Show error page
        }
    }

    public function create()
    {
        $cars = Car::all();
        return view('booking.create', ['cars' => $cars ]);
    }

    public function history() {
        $car_booking_history= CarBooking::where('status', '=', 'returned')->get();
        return view('booking.history', ['car_booking_history' => $car_booking_history]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2|regex:/^[A-Za-z\s-_]+$/',
            'email' => 'required|string|email|max:255',
            // 'email' => 'required|string|email|max:255|exists:users',
            'address' => 'required|string|max:50',
            'mobile' => 'required|digits:10',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'transaction_id' => 'required',
        ]);

        $allRequest = $request->all();
        $car_booking = new CarBooking();
        $car_booking->name = $allRequest['name'];
        $car_booking->email = $allRequest['email'];
        $car_booking->car_id = $allRequest['transaction_id'];
        $car_booking->save();

        $bookingDetails = new CarBookingDetails();
        $bookingDetails->address = $allRequest['address'];
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
        public function __construct()
    {
        $this->middleware('auth');
    }
        public function view() {
            return view('booking.create');
        }

        public function thankyou() {
          return view('booking.thankyou');
        }

}
