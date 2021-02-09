<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        //restituisce la la view con nome home all'inerno di 
        // resurces->vievs-home.blade.php
        return view('home');
    }
}
