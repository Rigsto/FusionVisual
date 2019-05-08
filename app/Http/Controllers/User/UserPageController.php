<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }

    public function dashboard(){
        $pages = 'dash';
        return view('user.index', compact('pages'));
    }
}
