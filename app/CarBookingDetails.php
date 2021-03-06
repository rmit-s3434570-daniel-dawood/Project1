<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBookingDetails extends Model
{
    protected $dates = [ 'start_date', 'end_date' ];
    protected $fillable = [ 'mobile', 'address'];

    public function car_booking() {
        return $this->belongsTo('App\CarBooking', 'booking_id');
    }
}
