<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salad extends Model
{
    protected $fillable = ['title','description','consist','price','imagePath','weight'];
}
