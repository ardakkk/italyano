<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function postCheckout(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        $token = "522231036:AAFZDtC2uiwqtkyV9sMk8V4mCZwhoj3jk7c";
        $chat_id = "-249785968";

        $text = array();
        $text['name'] = $request->name;
        $text['phone'] = $request->phone;
        $text['address'] = $request->address;
        $text['total'] = $request->totalPrice;
        $text['time'] = $request->timeToOrder;
        $text['order'] = '';
        foreach($request->order as $item){
            $text['order'] .= $item['item'].' '.$item['count'].'шт'.', ';
        }
        $txt = '';
        foreach($text as $key => $value){
            $txt .= "<b>".$key.":"."</b> ".$value."%0A";
          };
        
        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->dateToOrder = $request->dateToOrder;
        $order->timeToOrder = $request->timeToOrder;
        $order->comments = $request->comments;
        $order->cart = serialize($request->order);
        $order->save();

        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

        return response()->json(['success' => 'Успешно заказано!']);
    }
}
