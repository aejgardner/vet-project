<?php

namespace Tests\Unit;
use App\Cracker;

use PHPUnit\Framework\TestCase;

class CrackerTest extends TestCase
{
    public function setUp() : void
    {
        parent::setUp();

        $this->cracker = new Cracker();
    }

    public function testBang() 
    {
        $cracker = new Cracker();
        $this->assertSame("a", $cracker->decrypt("!"));
    }

    public function testClosedBracket() 
    {
        $cracker = new Cracker();
        $this->assertSame("b", $cracker->decrypt(")"));
    }

    public function testBiggerWord() 
    {
        $cracker = new Cracker();
        $this->assertSame("wombat", $cracker->decrypt("ldb)!i"));
    }
}
