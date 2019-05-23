<?php

namespace App\Model;

use App\Model\Supplybranch;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function supplybranches()
    {
        return $this->hasMany(Supplybranch::class);
    }
}
