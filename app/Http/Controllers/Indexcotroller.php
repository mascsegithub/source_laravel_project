<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Indexcotroller extends Controller {

    public function index() {
        return view('index');
    }

}
