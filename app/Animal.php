<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

  protected $fillable = ["name", "type", "weight", "height", "biteyness", "owner_id"];
    
    public function dangerous()
  {
    return $this->biteyness >= 3;
  }
    
    public function owner()
  {
    // an animal belongs to one owner
    return $this->belongsTo(Owner::class);
  }

  // animal can have many treatments
  public function treatments()
  {
    return $this->belongsToMany(Treatment::class);
  }

  // just accept an array of strings
  // we don't want to pass request in as there's no
  // reason models should know about about the request
  public function setTreatments(array $strings) : Animal
  {
    $treatments = Treatment::fromStrings($strings);
    // we're on an animal instance, so use $this
    // pass in collection of IDs
    $this->treatments()->sync($treatments->pluck("id"));
    // return $this in case we want to chain
    return $this;
  }
}
