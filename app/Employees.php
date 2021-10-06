<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function prospectEmployee(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProspectEmployee::class);
    }

    public function customerEmployee(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CustomerEmployee::class);
    }
}
