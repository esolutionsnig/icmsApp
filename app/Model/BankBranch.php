<?php

namespace App\Model;

use App\Model\Banks;
use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{
    public function banks()
    {
        return $this->belongsTo(Banks::class);
    }
}
