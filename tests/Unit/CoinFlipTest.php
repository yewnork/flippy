<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\CoinFlip;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CoinFlipTest extends TestCase
{
  
    public function testFlip()
    {
        $flip = new CoinFlip;
        $flip->flip();
        $this->assertContains($flip->result,['heads','tails']);
    }
  
    
  
  
}
