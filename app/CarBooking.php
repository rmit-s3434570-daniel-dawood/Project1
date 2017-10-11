<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    //
    protected $fillable = [ 'name', 'email', 'status' ];

    public function car_id() {
        return $this->belongsTo('App\Car');
    }

    public function car_booking_detail() {
        return $this->hasOne('App\CarBookingDetails', 'booking_id');
    }
}
