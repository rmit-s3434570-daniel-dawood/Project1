<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBookingDetails extends Model
{
    protected $dates = [ 'start_date', 'end_date' ];
    protected $fillable = [ 'mobile', 'address_line_1', 'address_line_2', ];
}
