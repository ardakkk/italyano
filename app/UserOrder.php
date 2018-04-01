<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    protected $fillable = ['user_id', 'cart', 'totalPrice', 'comments','dateOfOrder','timeToOrder'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
