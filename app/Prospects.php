<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospects extends Model
{
    public function customers()
    {
        return $this->hasOne('App\Customers', 'customers_id','customer_id');
    }
}
