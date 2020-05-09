<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
  /**
  *All flights that are linked with that plane
  */
    public function flights() {
      return $this->hasMany('App\Flight');
    }
}
