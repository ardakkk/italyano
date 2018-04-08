<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $fillable = ['gift','totalPrice', 'count'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
