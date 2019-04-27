<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index(){
        return view("index");
    }

    public function design(){
        // return view("index");
    }

    public function web(){
        return view("web");
    }

    public function mobile(){
        return view("apps");
    }

    public function portfolio(){
        return view("portfolio");
    }

    public function meet(){
        return view("meet-us");
    }

    public function contact(){
        return view("contact-us");
    }

    public function sign(){
        return view("sign-up");
    }

    public function checkout(){
        return view("checkout");
    }

    public function review(){
        return view("review");
    }
}
