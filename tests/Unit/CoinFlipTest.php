<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\CoinFlip;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CoinFlipTest extends TestCase
{
  	use DatabaseTransactions;

  	function setUp(){
  		parent::setUp();
  		$baseCoinFlip = new CoinFlip;
  	}

  	/**
  	* @test
  	*/
    public function coinflip(){
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    }

    /**
  	* @test
  	*/
    public function multiple_coinflips(){
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    	$flip = CoinFlip::flip();
    	$this->assertContains($flip->result,['heads','tails']);
    }

    /**
  	* @test
  	*/
    public function check_coinflip_is_in_series(){
    	$flip = CoinFlip::flip();
    	$flip->createSeries();
    	$this->assertEquals(true,$flip->inSeries());

    }

    /**
  	* @test
  	*/
    public function coinflip_not_in_series(){
    	$flip = CoinFlip::flip();
    	$this->assertEquals(false,$flip->inSeries());

    }




  
  
}
