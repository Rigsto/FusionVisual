<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\MeetUs;
use App\Pesanan;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPageController extends Controller
{
    public function dashboard(){
        $blog = Blog::all()->count();
        $user = Role::with('users')->where('nama', 'user')->get()->count();
        $meet = MeetUs::all()->count();
        $project = Pesanan::all()->count();
        return view('admin.dashboard', compact('blog', 'user', 'meet', 'project'));
    }
}
