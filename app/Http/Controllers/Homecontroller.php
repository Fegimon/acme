<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function home()
    {
       
        return view('auth.login');
    }
    public function staffdashboard()
    {
       
        return view('staff.pages.dashboard');
    }
    public function admindashboard()
    {
       
        return view('admin.pages.dashboard');
    }
    public function staffdetails()
    {
       
        return view('admin.pages.staffdetails');
    }
    public function studentdetails()
    {
       
        return view('admin.pages.studentdetails');
    }
    public function createstaff()
    {
       
        return view('admin.pages.createstaff');
    }
    public function createstudent()
    {
       
        return view('admin.pages.createstudent');
    }
}
