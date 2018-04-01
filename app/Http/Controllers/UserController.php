<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use App\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function postSignIn(Request $request){
        $request->validate([
           'phone' => 'required|min:15',
           'password' => 'required|min:4'
        ]);
        if(Auth::attempt(['phone' => $request->phone,'password' => $request->password])){
            return response()->json(200);
        }
        return redirect('/');
    }
    public function getSignIn(){
        return view('user.signin');
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    public function postSignUp(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:4'
         ]);

         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $user->address = $request->address;
         $user->phone = $request->phone;
         $user->save();
        // Auth::login($user);
        $token = "522231036:AAFZDtC2uiwqtkyV9sMk8V4mCZwhoj3jk7c";
        $chat_id = "-249785968";
        $text = array();
        $user = User::all();
        $count_user = count($user);
        $telegram = new Telegram(['success' => 'newUser']);
        $telegram->newUser($token,$chat_id,"Добавился новый пользователь, $request->name !Количесто пользователей: $count_user");
        return response()->json(200);
    }

    public function profileEdit(Request $request){
        $request->validate([
            'email' => 'email|required'
         ]);

         $user = User::find($request->editUser);
         $user->name = $request->name;
         $user->email = $request->email;
         $user->phone = $request->phone;
         $user->address = $request->address;
         $user->update();

         return response()->json(200);
    }
}
