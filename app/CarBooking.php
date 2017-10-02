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
}
