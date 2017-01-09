<?php

namespace App;

use App\Flight;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    public function arrivingFlights()
    {
      return $this->hasMany('Flight', 'arrivalAirport_id');
    }

    public function departingFlights()
    {
      return $this->hasMany('Flight', 'departureAirport_id');
    }
}
