<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicSettings extends Controller
{
    public function index(){
        return view('union-setup.index');
    }
}
