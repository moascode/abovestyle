<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** An order is belong to an user */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
