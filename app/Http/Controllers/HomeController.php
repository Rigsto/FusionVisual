<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(){
        return view("pages.index");
    }

    public function design(){
        // return view("pages.index");
    }

    public function web(){
        return view("pages.web");
    }

    public function mobile(){
        return view("pages.apps");
    }

    public function portfolio(){
        return view("pages.portfolio");
    }

    public function meet(){
        return view("pages.meet-us");
    }

    public function contact(){
        return view("pages.contact-us");
    }

    public function login(){
        return view("pages.login");
    }

    public function sign(){
        return view("pages.sign-up");
    }

    public function checkout(){
        return view("pages.checkout");
    }

    public function review(){
        return view("pages.review");
    }
}
