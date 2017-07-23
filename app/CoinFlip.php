<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoinFlip extends Model
{
    protected $outcomes = ['heads','tails'];
  
    function coinflipseries(){
      return $this->belongsTo('App\CoinFlipSeries');
    }
    
    function flip(){
      $key = array_rand($this->outcomes);
      $this->result = $this->outcomes[$key];
      return $this->result;
    }
  
    
  
    
  
  
}
