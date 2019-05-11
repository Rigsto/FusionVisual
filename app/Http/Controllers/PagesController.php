<?php

namespace App\Http\Controllers;

use App\PaketWeb;

class PagesController extends Controller
{
    public function index(){
        return view("index");
    }

    public function design(){
        // return view("index");
    }

    public function web(){
        $companies = PaketWeb::whereBetween('id' , [1,2])->get();
        $bus = PaketWeb::whereBetween('id' , [3,5])->get();
        return view("web", compact('companies','bus'));
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
