<?php

namespace Tests\Unit;
use App\Adder;

use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{

    public function setUp() : void
    {
        parent::setUp();

        $this->adder = new Adder();
    }

    public function testOnePlus0()
    {
        $adder = new Adder();
        $this->assertSame(1, $this->adder->add(1, 0));
    }

    public function testOnePlusOne()
    {
        $adder = new Adder();
        $this->assertSame(2, $this->adder->add(1, 1));
    }

    public function test10PlusFive()
    {
        $adder = new Adder();
        $this->assertSame(15, $this->adder->add(10, 5));
    }

}
