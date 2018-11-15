<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Validator;
use Response;
use DB;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct() {
        $this->course = new Course();
    }
    public function addcourse(Request $request)
    {
        $data=$request->all();
        // dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'coursecode' => isset($data['coursecode']) ? $data['coursecode'] : '',
                'coursename' => isset($data['coursename']) ? $data['coursename'] : '',
                'category' => isset($data['category']) ? $data['category'] : '',
              
                'description' => isset($data['description']) ? $data['description'] : '',
                'startdate' => isset($data['startdate']) ? $data['startdate'] : '',
                'enddate' => isset($data['enddate']) ? $data['enddate'] : '',
                
            ];
           
           

            $rules = array(
                'coursecode' => 'required',
                'coursename' => 'required',
                'category'   => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $courseInput = array(
                    'id' => $input['id'],
                    'coursecode' => $input['coursecode'],
                    'coursename' => $input['coursename'],
                    'category' => $input['category'],
                    'description'=>$input['description'],
                    'startdate' => $input['startdate'],
                    'enddate' => $input['enddate'],
                    'status'=>1,
                   
                );
                $courseid = $this->course->saveCourse($courseInput);
               
               if ($courseid) {
                   
                return redirect('backend/courselist');
                } else {
                    return Response::json([
                                'status' => 0,
                                'message' => 'Please provide valid details'
                                    ], 400);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
     
    }

    public function addcoursecategory(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',  
            ];
           
            $rules = array(
                'category' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'category' => $input['category'],
                    'status'=>1
                );
                //dd($dataInput);
                $bannerid = $this->course->savecourseCategory($dataInput);
              
               if ($bannerid) {
                   
                return redirect('backend/addcoursecategory');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

    public function addbatch(Request $request)
    {
        $data=$request->all();
      

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'course_id' => isset($data['course_id']) ? $data['course_id'] : '',  
                'batch_name' => isset($data['batch_name']) ? $data['batch_name'] : '',  
                'start_time' => isset($data['start_time']) ? $data['start_time'] : '',
                'end_time' => isset($data['end_time']) ? $data['end_time'] : '',  

            ];
           
            $rules = array(
                'batch_name' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'course_id'=>$input['course_id'],
                    'batch_name' => $input['batch_name'],
                    'start_time' => $input['start_time'],
                    'end_time' => $input['end_time'],
                   
                );
                //dd($dataInput);
                $schedule = $this->course->savebatchschedule($dataInput);
              
               if ($schedule) {
                   
                return redirect('backend/courselist');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }
    public function addcoursedetails(Request $request)
    {
        $data=$request->all();
      

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'student_id' => isset($data['student_id']) ? $data['student_id'] : '',  
                'course_name' => isset($data['course_name']) ? $data['course_name'] : '',  
                'course_price' => isset($data['course_price']) ? $data['course_price'] : '',
                'payment_mode' => isset($data['payment_mode']) ? $data['payment_mode'] : '', 
                'course_batch' => isset($data['course_batch']) ? $data['course_batch'] : '',  
                'discount' => isset($data['discount']) ? $data['discount'] : '',  
                'payment_desc' => isset($data['payment_desc']) ? $data['payment_desc'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',  

            ];
           
            $rules = array(
                'course_price' => 'required',
    
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                $data = Session::flash('error', 'Please Provide All Datas!');
                return Redirect::back()
                ->withInput()
                ->withErrors($data);
            } else { 
              
                $dataInput = array(
                    'id' => $input['id'],
                    'student_id'=>$input['student_id'],
                    'course_name' => $input['course_name'],
                    'course_price' => $input['course_price'],
                    'payment_mode' => $input['payment_mode'],
                    'course_batch'=>$input['course_batch'],
                    'discount' => $input['discount'],
                    'payment_desc' => $input['payment_desc'],
                    'comments' => $input['comments'],
                   
                );
                //dd($dataInput);
                $course = $this->course->savecoursedetails($dataInput);
              
               if ($course) {
                   
                return redirect('backend/studentdetails');
                } else {
                    $data = Session::flash('warning', 'Something Error Occured!');
                    return redirect('login')->with(['data', $data], ['warning', $data]);
                }
            }
        } else {
            return Response::json([
                        'status' => 0,
                        'message' => "No data"
            ]);
        }
        
    }

}
