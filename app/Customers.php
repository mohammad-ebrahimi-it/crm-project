<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function customerEmployee()
    {
        return $this->hasMany(CustomerEmployee::class);
    }
}
