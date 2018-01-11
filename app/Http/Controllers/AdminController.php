<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRegister;

class AdminController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.admin');
    }

    public function visitorslist() {
        $data = array();
        $userlist = UserRegister::take(100)->orderBy('user_id', 'DESC')->get();
        $data['userlist'] = $userlist;
        return view('admin.vistorlist', $data);
    }

}
