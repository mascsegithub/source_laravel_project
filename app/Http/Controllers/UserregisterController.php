<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Redirect;
use App\UserRegister;

class UserregisterController extends Controller {

    public function index() {
        return view('user.user_register');
    }

    public function submit_register(Request $request) {

        $user_name = $request->input('visitor_name');
        $user_email = $request->input('visitor_email');
        $user_address = $request->input('visitor_address');
        $user_moble = $request->input('visitor_phone');

        $UserRegister = new UserRegister;
        $UserRegister->user_name = $user_name;
        $UserRegister->user_email = $user_email;
        $UserRegister->user_moble = $user_moble;
        $UserRegister->user_address = $user_address;
        $UserRegister->save();
        return redirect('user_register');
        //return $this->index();
    }

}
