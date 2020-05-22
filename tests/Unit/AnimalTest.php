<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Animal;

class AnimalTest extends TestCase
{
    private $owner;

    public function setUp() : void
    {
        parent::setUp();

        $this->animal = new Animal([
            "name" => "Tom",
            "type" => "Sawyer",
            "weight" => "Elephant",
            "height" => "70",
            "biteyness" => "4"
        ]);
    }

    public function testDangerous()
    {
        $this->assertTrue($this->animal->dangerous());
    }
}
