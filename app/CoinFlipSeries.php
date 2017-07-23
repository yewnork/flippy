<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinFlipSeries extends Model
{
    //
  
    function coinflips(){
      return $this->hasMany('App\CoinFlip');
    }
}
