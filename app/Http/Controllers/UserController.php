<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignIn(Request $request){
        $request->validate([
           'email' => 'email|required',
           'password' => 'required|min:4'
        ]);
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return response()->json(['auth' => 'success']);
        }
        return redirect()->withInput();
    }
    public function getSignIn(){
        return view('user.signin');
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    // public function postSignUp(Request $request){
    //     var_dump($request);
    //     return response()->json($request);
    // }
}
