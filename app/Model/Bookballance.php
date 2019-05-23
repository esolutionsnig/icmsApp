<?php

namespace App\Model;

use App\Model\Banks;
use Illuminate\Database\Eloquent\Model;

class Bookballance extends Model
{
    public function banks()
    {
        return $this->belongsTo(Banks::class);
    }
}
