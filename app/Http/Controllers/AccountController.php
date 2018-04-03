<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required|unique:users,email',
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required|min:8|same:password2',
        ];
        $messages = [
            'password.same' => 'Passwords need to match'
        ];
        $request->validate($rules, $messages);

        //everything is cool
        $userData = [
            'email' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('firstName'),
            'surname' => $request->get('lastName'),
        ];
        DB::table('users')->insert($userData);
        Session::flash('success','yay, you are cool boiii!');
        return redirect()->back();
    }

    public function saveChatMassage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];
    }

    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}