<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinFlipsSeries extends Model
{
    //
  
    function coin_flips(){
      return $this->hasMany('App\CoinFlip');
    }
}
