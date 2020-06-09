<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home');
    }

    public function labsys() {
        return view('labsys');
    }

    public function questao1() {
        return view('questao1');
    }

    public function questao2() {
        return view('questao2');
    }
}
