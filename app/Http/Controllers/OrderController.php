<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Order;
use App\UserOrder;
use App\Telegram;
use App\User;
use App\Gift;

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
       
        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->dateToOrder = $request->dateToOrder;
        $order->timeToOrder = $request->timeToOrder;
        $order->comments = $request->comments;
        $order->cart = serialize($request->order);
        $order->save();

        $telegram = new Telegram($text);
        $telegram->send($token, $chat_id);

        return response()->json(['success' => 'Успешно заказано!']);
    }
    public function authOrder(Request $request){
        $request->validate([
            'comments' => 'required',
            'userOrder' => 'required',
            'totalPrice' => 'required'
         ]);
         $token = "522231036:AAFZDtC2uiwqtkyV9sMk8V4mCZwhoj3jk7c";
         $chat_id = "-249785968";

        $order = new UserOrder();
        $order->cart = serialize($request->cart);
        $order->comments = $request->comments;
        $order->totalPrice = $request->totalPrice;
        $order->dateOfOrder = $request->date;
        $order->timeToOrder = $request->time;
        Auth::user()->orders()->save($order);
            
        $user = User::where('phone', $request->userOrder)->first();
        
        $text['name'] = $user->name;
        $text['phone'] = $user->phone;
        $text['address'] = $user->address;
        $text['dateOfOrder'] = $request->date;
        $text['timeToOrder'] = $request->time;
        $text['comments'] = $request->comments;
        $text['order'] = '';
        foreach($request->cart as $item){
            $text['order'] .= $item['item'].' '.$item['count'].'шт'.', ';
        }
        $txt = '';
        $telegram = new Telegram($text);    
        $telegram->send($token, $chat_id);
        
        return response()->json($user);
    }
    public function getGift(){
        $cookie_name = "gift";
        $cookie_value = "taked";
        
        if(!isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        } else {
            return redirect('/');
        }

        return view('shop.gift');   
    }
    public function postGift(Request $request){
        
        return response()->json($request->gift);
    }
}
