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
                'sub_category' => isset($data['sub_category']) ? $data['sub_category'] : '',
                'description' => isset($data['description']) ? $data['description'] : '',
                'startdate' => isset($data['startdate']) ? $data['startdate'] : '',
                'enddate' => isset($data['enddate']) ? $data['enddate'] : '',
                
            ];
           
           

            $rules = array(
                'coursecode' => 'required',
                'coursename' => 'required',
                'description' => 'required',
                'category'   => 'required',
                'sub_category' => 'required',
                'startdate' => 'required',
                'enddate' => 'required',
               
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
                    'sub_category' => $input['sub_category'],
                    'description'=>$input['description'],
                    'startdate' => $input['startdate'],
                    'enddate' => $input['enddate'],
                    'status'=>1,
                   
                );
                $courseid = $this->course->saveCourse($courseInput);
               
               if ($courseid) {
                   
                return redirect('admin/courselist');
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
}
