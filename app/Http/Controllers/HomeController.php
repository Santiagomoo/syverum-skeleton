<?php

namespace App\Http\Controllers;

class HomeController{

    public function index(){

        return view('home');
    }

    public function service(){
        return view('servicios');
    }
    
    public function about(){

        return view('acercade');
    }
}

?>