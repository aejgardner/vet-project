<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function setUp() : void
    {
        parent::setUp();

        $this->fizzbuzz = new FizzBuzz();
    }

    public function test1()
    {
        $this->assertSame("1", $this->fizzbuzz->forNumber(1));
    }

    public function test2()
    {
        $this->assertSame("2", $this->fizzbuzz->forNumber(2));
    }
    
    public function test3()
    {
        $this->assertSame("Fizz", $this->fizzbuzz->forNumber(3));
    }

    public function test4()
    {
        $this->assertSame("4", $this->fizzbuzz->forNumber(4));
    }
    
    public function test5()
    {
        $this->assertSame("Buzz", $this->fizzbuzz->forNumber(5));
    }

    public function test6()
    {
        $this->assertSame("Fizz", $this->fizzbuzz->forNumber(6));
    }

    public function test7()
    {
        $this->assertSame("Rarr", $this->fizzbuzz->forNumber(7));
    }

    public function test10()
    {
        $this->assertSame("Buzz", $this->fizzbuzz->forNumber(10));
    }

    public function test15()
    {
        $this->assertSame("FizzBuzz", $this->fizzbuzz->forNumber(15));
    }

    public function test34()
    {
        $this->assertSame("34", $this->fizzbuzz->forNumber(34));
    }

}
