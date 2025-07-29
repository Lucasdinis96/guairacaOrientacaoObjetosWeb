<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function index(){
        return view('exemplo');
    }
}
