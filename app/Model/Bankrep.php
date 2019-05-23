<?php

namespace App\Model;

use App\Model\Banks;
use Illuminate\Database\Eloquent\Model;

class Bankrep extends Model
{
    public function bank()
    {
        return $this->belongsTo(Banks::class);
    }
}
