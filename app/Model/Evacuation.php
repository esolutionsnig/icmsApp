<?php

namespace App\Model;

use App\Model\Cit;
use App\Model\Evacuationpreparation;
use Illuminate\Database\Eloquent\Model;

class Evacuation extends Model
{
    // Evacuation Request Has Many Evacuation Preparations
    public function evacuationpreparations()
    {
        return $this->hasMany(Evacuationpreparation::class);
    }

    public function cits()
    {
        return $this->hasMany(Cit::class);
    }
}
