<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Treatment;
use Illuminate\Support\Collection;

class TreatmentTest extends TestCase
{
    use RefreshDatabase;

    public function testFromString()
    {
        // call the Treatment::fromString static method
        $result = Treatment::fromString("Hammock");
        // check we get back a Tag
        // using assertInstanceOf to check the class
        $this->assertInstanceOf(Treatment::class, $result);
        // check the tag has the right name
        $this->assertSame("Hammock", $result->name);

        // get the first tag from the database
        $tagFromDB = Treatment::all()->first();
        // check we get a tag
        $this->assertInstanceOf(Treatment::class, $tagFromDB);
        // check it's got the right name
        $this->assertSame("Hammock", $tagFromDB->name);
    }

    public function testFromStrings()
    {   
        // call the fromStrings method
        $treatments = Treatment::fromStrings(["Test", "Hammock"]);
        // check it's a Collection
        $this->assertInstanceOf(Collection::class, $treatments);
        // check the first item is "Test"
        $this->assertSame("Test", $treatments[0]->name);
        // check the second item is "Hammock"
        $this->assertSame("Hammock", $treatments[1]->name);
    }

}
