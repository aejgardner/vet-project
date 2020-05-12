<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function fullAddress()
    {
        return $this->address_1 . " " . $this->address_2;
    }

    public function formattedPhoneNumber()
    {
        return substr($this->telephone, 0, -7) . " " . substr($this->telephone, 4, -4) . " " . substr($this->telephone, -4);
    }
}
