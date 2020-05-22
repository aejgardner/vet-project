<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Owner;
use App\Animal;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OwnerTest extends TestCase
{
    use RefreshDatabase;

    private $owner;

    public function setUp() : void
    {
        parent::setUp();

        $this->owner = new Owner([
            "first_name" => "Joe",
            "last_name" => "Blogs",
            "telephone" => "07274097163",
            "fake" => "fake property"
        ]);
    }

    public function testNumberOfPets()
    {
        
        Owner::create([
            "first_name" => "Eric",
            "last_name" => "Dier",
            "telephone" => "07394716204",
            "address_1" => "9",
            "address_2" => "Long Road",
            "town" => "Bristol",
            "postcode" => "BS5TND"
        ]);

        Owner::create([
            "first_name" => "Jermaine",
            "last_name" => "Pennant",
            "telephone" => "07293471037",
            "address_1" => "67",
            "address_2" => "Liverpool Street",
            "town" => "Bristol",
            "postcode" => "BS4BCH"
        ]);

        Owner::create([
            "first_name" => "Simon",
            "last_name" => "Smith",
            "telephone" => "07263094761",
            "address_1" => "25",
            "address_2" => "Wide Street",
            "town" => "Bristol",
            "postcode" => "BS79UH"
        ]);

        // create animals
        Animal::create([
            "name" => "Edgar",
            "type" => "Toad",
            "weight" => "20",
            "height" => "40",
            "biteyness" => "2",
            "owner_id" => "1"
        ]);

        Animal::create([
            "name" => "Venny",
            "type" => "Rabbit",
            "weight" => "10",
            "height" => "20",
            "biteyness" => "1",
            "owner_id" => "1"
        ]);

        Animal::create([
            "name" => "Lance",
            "type" => "Horse",
            "weight" => "50",
            "height" => "70",
            "biteyness" => "4",
            "owner_id" => "2"
        ]);

        // get the owners back from the database
        $owner1 = Owner::find(1);
        $owner2 = Owner::find(2);
        $owner3 = Owner::find(3);
        // check the titles match
        $this->assertSame(2, $owner1->numberOfPets());
        $this->assertSame(1, $owner2->numberOfPets());
        $this->assertSame(0, $owner3->numberOfPets());
    }
    

    public function testFillable()
    {
        // test whether these properties are in $fillable - last one isn't so should equate to null
        $this->assertTrue($this->owner->first_name === "Joe");
        $this->assertTrue($this->owner->last_name === "Blogs");
        $this->assertTrue($this->owner->telephone === "07274097163");
        $this->assertSame(null, $this->owner->fake);
    }

    public function testValidPhoneNumber()
    {

        $validNumbers = ['07274009376', '07274208376', '07127498376'];

        $nonValidNumbers = ['072749462098376', '0098376', '076'];

        foreach($validNumbers as $number) 
        {
            $this->owner->telephone = $number;
            $this->assertTrue($this->owner->validPhoneNumber());
        }

        foreach($nonValidNumbers as $number) 
        {
            $this->owner->telephone = $number;
            $this->assertFalse($this->owner->validPhoneNumber());
        }
    }
}


