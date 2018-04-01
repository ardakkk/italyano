<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserOrder;
use App\Pizza;
use App\Salad;
use App\Bvg;
use App\Main;
use App\User;

class ProductController extends Controller
{
    public function getPizza(){
     
    $pizza = Pizza::all();
    $salad = Salad::all();
    $bvg = Bvg::all();
    $main = Main::all();
    $history_order = null;
    $gift = 0;
    if(Auth::check()){
        $gift = count(UserOrder::all()->where('user_id',strval(Auth::user()->id))->where('accept','1'));
        $history_order = UserOrder::all()->where('user_id',strval(Auth::user()->id))->take(-3); 
    }
    return view('shop.index',["pizzas" => $pizza,'salads' => $salad,'bvgs' => $bvg,'mains' => $main,'historyOrder' => $history_order,'giftCount' => $gift]);
    }
}

