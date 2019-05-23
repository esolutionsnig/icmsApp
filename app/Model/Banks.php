<?php

namespace App\Model;

use App\Model\Bankrep;
use App\Model\BankBranch;
use App\Model\Bookballance;
use Illuminate\Database\Eloquent\Model;

class Banks extends Model
{
    protected $fillable = [
        'bank_name','bank_code','added_by'
    ];

    // Get all branches
    public function branches()
    {
        return $this->hasMany(BankBranch::class);
    }

    // Get Bank Reps
    public function bankreps()
    {
        return $this->hasMany(Bankrep::class);
    } 

    // Get book ballances
    public function bookballances()
    {
        return $this->hasMany(Bookballance::class);
    }
}
