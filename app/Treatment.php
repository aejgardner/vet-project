<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Treatment extends Model
{
    protected $fillable = ["name"];

    public $timestamps = false;

    // using the belongsToMany() method
    // as it's a many-to-many relationship
    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    static public function fromString(string $string) : Treatment
    {
        // check if tag already exists, if it does just use that, otherwise create a new one
        $treatment = Treatment::where("name", $string)->first();
        return $treatment ? $treatment : Treatment::create(["name" => $string]);

        return Treatment::create(["name" => trim($string)])->unique();
    }

    static public function fromStrings(array $strings) : Collection
    {
        return collect($strings)->map([Treatment::class, "fromString"]);
    }
}
