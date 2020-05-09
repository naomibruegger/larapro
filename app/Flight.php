<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
  //gets plane that belongs to this flights
    public function plane() {
      return $this->belongsTo('App\Plane');
    }
}
