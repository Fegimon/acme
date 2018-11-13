<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

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
        $studentcount = DB::table('acme-student')->where('status',1)->count();
        $coursecount = DB::table('acme-course')->where('status',1)->count();
        $enquirycount = DB::table('acme-enquiry')->where('status',1)->count();

        return view('backend.pages.dashboard')->with('studentcount',$studentcount)->with('coursecount',$coursecount)
        ->with('enquirycount',$enquirycount);
    }
    public function createstudent()
    {
        $coursers = DB::table('acme-course')->get();

        return view('backend.pages.createstudent')->with('course',$coursers);
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
        $category = DB::table('course_category')->get();
        //dd($coursers);
        return view('backend.pages.addcourse')->with('category',$category);
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
        $category = DB::table('course_category')->get();

        return view('backend.pages.editcourse')->with('coursers',$coursers)->with('category',$category);
    }
    public function addenquiry()
    {
        $coursers = DB::table('acme-course')->get();
      
        return view('backend.pages.addenquiry')->with('course',$coursers);
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
        $coursers = DB::table('acme-course')->get();
        return view('backend.pages.editenquiry')->with('enquiryrs',$enquiryrs)->with('course',$coursers);
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
      if($id=="staff"){
       $category = DB::table('acme-staff')
       ->select('acme-staff.*')
    //    ->join('tbl_category','tbl_category.id','=','tbl_subcategory.category_id')
    //    ->where('tbl_subcategory.category_id',$id)
       //->pluck("tbl_subcategory","id")->all();
      ->get();
      }if($id=="student"){
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
        $payrs = DB::table('acme-paymentdetails')
        ->select('acme-paymentdetails.*')
        ->where('status',1)
        ->get();
        //dd($payrs);
        return view('backend.pages.paymentdetaillist')->with('payrs',$payrs);
    }
    public function editpayment($id)
    {
        $payrs = DB::table('acme-paymentdetails')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.editpayment')->with('payrs',$payrs);
    }
    public function deletepaymentdetail($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('acme-paymentdetails')->where('id', $id)->update($course);

        if($updatecourse){
            
            return redirect('backend/paymentdetaillist ');
        }
        else{
            return redirect('backend/paymentdetaillist');
        }
    }
    public function viewpayment($id)
    {
        //dd($id);
        $paymentrs = DB::table('acme-paymentdetails')->where('id',$id)->first();
        //dd($studentrs);
        return view('backend.pages.viewpayment')->with('paymentrs',$paymentrs);
    }
    public function addcoursecategory()
    {
        $course = DB::table('course_category')->where('status',1)->get();
        return view('backend.pages.addcoursecategory')->with('course',$course);
    }
    public function editcoursecategory($id)
    {
       
        $course = DB::table('course_category')->where('id',$id)->first();
      // dd($course);
        if ($course) {
            return Response::json([
                'status' => 1,
                'data'   => $course,
            ], 200);} else {
            return Response::json([
                'status'  => 0,
                'message' => 'course not found',
            ], 400);
        }
    }
    public function deletcoursecategory($id)
    {
        //dd($id);
        $course = array(
           
            'status'=>0,
            'updated_at' => date("Y-m-d H:i:s")
        );
        $updatecourse=DB::table('course_category')->where('id', $id)->update($course); 
        return redirect('backend/addcoursecategory ');
       
    }
}
