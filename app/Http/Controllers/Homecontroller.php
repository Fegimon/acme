<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       
        return view('admin.pages.login');
    }
    public function register()
    {
       
        return view('admin.pages.register');
    }
    public function dashboard()
    {
       
        return view('admin.pages.dashboard');
    }
}
