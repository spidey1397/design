<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function nav1(){
        return view('template.home.linked.about');
    }

    public function nav2(){
        return view('template.home.linked.service');
    }

    public function nav3(){
        return view('template.home.linked.portfolio');
    }

    public function nav4(){
        return view('template.home.linked.contact');
    }
}
