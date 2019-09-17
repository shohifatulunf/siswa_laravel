<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function _construct(){
        $this->middleware('auth');
    }

    public function homepage(){
        $halaman = 'home';
        return view('page.homepage');
    }

    public function about(){
        $halaman = 'about';
        return view('page.about', compact('halaman'));
    }
    public function register(){
        $halaman = 'register';
        return view('page.register', compact('halaman'));
    }
}
