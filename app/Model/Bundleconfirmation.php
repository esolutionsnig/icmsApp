<?php

namespace App\Model;

use App\Model\Thrownexception;
use App\Model\Bundleconfirmationbag;
use Illuminate\Database\Eloquent\Model;

class Bundleconfirmation extends Model
{
    public function bundleconfirmationbags()
    {
        return $this->hasMany(Bundleconfirmationbag::class);
    }

    public function thrownexceptions()
    {
        return $this->hasMany(Thrownexception::class);
    }
}
