<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $studentrs = DB::table('acme-student')->get();
        //dd($staffrs);
        return view('admin.pages.studentdetails')->with('studentrs',$studentrs);
    }
    public function createstaff()
    {
       // $staffrs = DB::table('staff')->get();
        //dd($staffrs);
        return view('admin.pages.createstaff');
    }
    public function createstudent()
    {
       
        return view('admin.pages.createstudent');
    }
    public function editstudent($id)
    {
        $studentrs = DB::table('acme-student')->where('id',$id)->first();
        //dd($studentrs);
        return view('admin.pages.editstudent')->with('studentrs',$studentrs);
    }
}
