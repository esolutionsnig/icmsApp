<?php

namespace App\Model;

use App\Model\Evacuation;
use Illuminate\Database\Eloquent\Model;

class Cit extends Model
{
    // Cit Belongs to an Evacution Request
    public function evacuation()
    {
        return $this->belongsTo(Evacuation::class);
    }
}
