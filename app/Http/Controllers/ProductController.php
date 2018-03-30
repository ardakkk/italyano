<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Salad;
use App\Bvg;
use App\Main;

class ProductController extends Controller
{
    public function getPizza(){
     
    $pizza = Pizza::all();
    $salad = Salad::all();
    $bvg = Bvg::all();
    $main = Main::all();

    return view('shop.index',["pizzas" => $pizza,'salads' => $salad,'bvgs' => $bvg,'mains' => $main]);
    }
}

