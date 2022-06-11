<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function transactions()
    {
        return $this->hasMany('App\Transactions','buyer_id','id');
    }
}
