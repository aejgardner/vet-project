<?php

namespace Tests\Unit\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Owner;

// TEST FILE FOR OWNERS CONTROLLER

class OwnersTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateOwner()
    {
        $response = $this->call('POST', '/owners/create', [
            "first_name" => "Larry",
            "last_name" => "Clark",
            "telephone" => "07263948162",
            "address_1" => "82",
            "address_2" => "Oxford Street",
            "town" => "Bristol",
            "postcode" => "BS4RKC"
        ]);

        $owner = Owner::all()->first();
        $this->assertSame("Larry", $owner->first_name);
        $this->assertSame("Clark", $owner->last_name);
    }
}
