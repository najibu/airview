<?php

namespace App;

use App\Flight;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function flights()
    {
      return $this->belongsToMany('Flight');
    }
}
