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
    // an animal belongs to an owner
    return $this->belongsTo(Owner::class);
  }
}
