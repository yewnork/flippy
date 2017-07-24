<?php

namespace App;

use App\CoinFlipsSeries;

use Illuminate\Database\Eloquent\Model;

class CoinFlip extends Model
{
    protected $outcomes = ['heads','tails'];
  	
  	public function __construct(array $attributes = array()){
	    parent::__construct($attributes);
	}

    function coin_flips_series(){
      return $this->belongsTo('App\CoinFlipsSeries');
    }

    function createSeries(){
    	if($this->inSeries()){
    		return false;
    	}
        
    	$coinFlipsSeries = new CoinFlipsSeries;
        $coinFlipsSeries->save();
    	$this->coin_flips_series()->associate($coinFlipsSeries);
    	return $this->save();
    }

    function inSeries(){
    	// Already assigned a series
    	if($this->coin_flips_series === null){
    		return false;
    	}
    	return true;
    }

    static function flip(){
    	$coinFlip = new CoinFlip;
    	$key = array_rand($coinFlip->outcomes);
    	$coinFlip->result = $coinFlip->outcomes[$key];
    	$coinFlip->save();
    	return $coinFlip;
    }
    
    // function reFlip(){
    //   $key = array_rand($this->outcomes);
    //   $this->result = $this->outcomes[$key];
    //   return $this->save();
    // }


  
    
  
    
  
  
}
