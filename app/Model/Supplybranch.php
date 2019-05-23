<?php

namespace App\Model;

use App\Model\Supply;
use Illuminate\Database\Eloquent\Model;

class Supplybranch extends Model
{
    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
