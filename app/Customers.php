<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $guarded = [];
    protected $fillable = ['first_name'];
    public function customerEmployee()
    {
        return $this->hasMany(CustomerEmployee::class);
    }
}
