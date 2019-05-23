<?php

namespace App\Model;

use App\Model\Bundleconfirmation;
use Illuminate\Database\Eloquent\Model;

class Bundleconfirmationbag extends Model
{
    public function bundleconfirmation()
    {
        return $this->belongsTo(Bundleconfirmation::class);
    }
}
