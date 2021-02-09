<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
    public function index() {
        //restituisce la la view con nome home all'inerno di 
        // resurces->vievs-home.blade.php
        $cars = Car::all();
       // $res = Car::All(); // raprresenta cars nel db
       
        return view('home', ['cars' => $cars]);
  

    }
}
