<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    function index(){
        $userName = Session::get('userName');
        return view('home.index', compact('userName'));
    }

    function secret(){
         $userName = Session::get('userName');
        return view('home.secret', compact('userName'));
    }
}
