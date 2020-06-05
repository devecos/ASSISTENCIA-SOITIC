<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function questoes() {
        return view('pages.questoes');
    }
    
    public function q1() {
        return view('pages.q1');
    }

    public function q2() {
        return view('pages.q2');
    }
}
