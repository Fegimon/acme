<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
       
        return view('backend.pages.login');
    }
    public function admindashboard()
    {
       
        return view('backend.pages.dashboard');
    }
    public function createstudent()
    {
       
        return view('backend.pages.addstudent');
    }
    public function studentdetails()
    {
        $studentrs = DB::table('acme-student')->where('status',1)->get();
       // dd($studentrs);
        return view('backend.pages.studentdetails')->with('studentrs',$studentrs);
    }
    public function editstudent($id)
    {
        $studentrs = DB::table('acme-student')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.editstudent')->with('studentrs',$studentrs);
    }

    public function deletestudent($id)
    {
        //dd($id);
        $student = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatestudent=DB::table('acme-student')->where('id', $id)->update($student);

        if($updatestudent){
            
            return redirect('backend/studentdetails');
        }
        else{
            return redirect('backend/studentdetails');
        }
    }
    public function viewstudent($id)
    {
        //dd($id);
        $studentrs = DB::table('acme-student')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.viewstudent')->with('studentrs',$studentrs);
    }
    public function addcourse()
    {
       // $coursers = DB::table('acme-course')->get();
        //dd($coursers);
        return view('backend.pages.addcourse');
    }
    public function courselist()
    {
        $coursers = DB::table('acme-course')->where('status',1)->get();
        //dd($coursers);
        return view('backend.pages.courselist')->with('coursers',$coursers);
    }
    public function viewcourse($id)
    {
        //dd($id);
        $coursers = DB::table('acme-course')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.viewcourse')->with('coursers',$coursers);
    }
    public function deletecourse($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('acme-course')->where('id', $id)->update($course);

        if($updatecourse){
            
            return redirect('backend/courselist ');
        }
        else{
            return redirect('backend/courselist');
        }
    }
    public function editcourse($id)
    {
        $coursers = DB::table('acme-course')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.editcourse')->with('coursers',$coursers);
    }
    public function addenquiry()
    {
       // $coursers = DB::table('acme-course')->get();
        //dd($coursers);
        return view('backend.pages.addenquiry');
    }
    public function enquirylist()
    {
        $enquiryrs = DB::table('acme-enquiry')->where('status',1)->get();
        //dd($coursers);
        return view('backend.pages.enquirylist')->with('enquiryrs',$enquiryrs);
    }
    public function viewenquiry($id)
    {
        //dd($id);
        $enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.viewenquiry')->with('enquiryrs',$enquiryrs);
    }
    public function deleteenquiry($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('acme-enquiry')->where('id', $id)->update($course);

        if($updatecourse){
            
            return redirect('backend/enquirylist ');
        }
        else{
            return redirect('backend/enquirylist');
        }
    }
    public function editenquiry($id)
    {
        $enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.editenquiry')->with('enquiryrs',$enquiryrs);
    }
    public function addpaymentdetail()
    {
        //$enquiryrs = DB::table('acme-enquiry')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.addpaymentdetail');
    }
    public function categoryselect($id)
    {
      //dd($id);
      if($id==1){
       $category = DB::table('acme-staff')
       ->select('acme-staff.*')
    //    ->join('tbl_category','tbl_category.id','=','tbl_subcategory.category_id')
    //    ->where('tbl_subcategory.category_id',$id)
       //->pluck("tbl_subcategory","id")->all();
      ->get();
      }if($id==2){
        $category = DB::table('acme-student')
        ->select('acme-student.*')
        // ->join('tbl_category','tbl_category.id','=','tbl_subcategory.category_id')
        // ->where('tbl_subcategory.category_id',$id)
        //->pluck("tbl_subcategory","id")->all();
       ->get();
      }
     //dd($category);
       $data = view('backend.pages.select',compact('category'))->render();
       return response()->json(['category'=>$data]);
    }
    public function paymentdetaillist()
    {
        $enquiryrs = DB::table('paymentdetails')->where('status',1)->get();
        //dd($coursers);
        return view('backend.pages.paymentdetaillist')->with('enquiryrs',$enquiryrs);
    }
}
