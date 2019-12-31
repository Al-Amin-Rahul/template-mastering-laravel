<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function about(){
        return view('front.about.about');
    }
    public function contact(){
        return view('front.contact.contact');
    }
    public function service(){
        return view('front.service.service');
    }
}
