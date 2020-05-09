<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
  //gets the flights that belong to this gate
    public function flight() {
      return $this->belongsTo('App\Flight');
    }
}
