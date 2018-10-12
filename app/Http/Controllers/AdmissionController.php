<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use Validator;
use Response;
use DB;
use Intervention\Image\Facades\Image;


class AdmissionController extends Controller
{

    public function __construct() {
        $this->admission = new Admission();
    }

    public function addstaff(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'firstname' => isset($data['firstname']) ? $data['firstname'] : '',
                'lastname' => isset($data['lastname']) ? $data['lastname'] : '',
                'dob' => isset($data['dob']) ? $data['dob'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'city' => isset($data['city']) ? $data['city'] : '',
                'state' => isset($data['state']) ? $data['state'] : '',
                'pincode' => isset($data['pincode']) ? $data['pincode'] : '',
                'gender' => isset($data['gender']) ? $data['gender'] : '',
                'age' => isset($data['age']) ? $data['age'] : '',
                'qualification' => isset($data['qualification']) ? $data['qualification'] : '',
                'experience' => isset($data['experience']) ? $data['experience'] : '',
                'address' => isset($data['address']) ? $data['address'] : '',
                'mobile' => isset($data['mobile']) ? $data['mobile'] : '',
                'stafimage' => isset($data['stafimage']) ? $data['stafimage'] : '',
               
            ];
           
            if ($request->hasFile('stafimage')) {
                $image = $request->file('stafimage')->getClientOriginalExtension();
                $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                $imageName = 'Staff' . '-' . $rand . '.' . $image;
                //print_r($imageName);die;
        
                $imagePath = $request->file('stafimage')->move(public_path() . '/upload/staff', $imageName);
                //print_r($imagePath);die;
                $img = Image::make($imagePath->getRealPath());
        
                
            }

            else{
                $imageName= '';
            }

            $rules = array(
                'firstname' => 'required',
                'lastname' => 'required',
                'dob' => 'required',
                //'email' => 'required',
                'city' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $staffInput = array(
                    'id' => $input['id'],
                    'firstname' => $input['firstname'],
                    'lastname' => $input['lastname'],
                    'mobile'=>$input['mobile'],
                    'dob' => $input['dob'],
                    'email' => $input['email'],
                    'city' => $input['city'],
                    'state' => $input['state'],
                    'pincode' => $input['pincode'],
                    'gender' => $input['gender'],
                    'age' => $input['age'],
                    'address'=>$input['address'],
                    'qualification' => $input['qualification'],
                    'experience'=>$input['experience'],
                    'staffimage'=>$imageName
                );
                $staffid = $this->admission->saveStaff($staffInput);
               
               if ($staffid) {
                   
                return redirect('admin/staffdetails');
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
    public function addstudent(Request $request)
    {
        $data=$request->all();
       //print_r($data);die;

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'firstname' => isset($data['firstname']) ? $data['firstname'] : '',
                'lastname' => isset($data['lastname']) ? $data['lastname'] : '',
                'dob' => isset($data['dob']) ? $data['dob'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'gender' => isset($data['gender']) ? $data['gender'] : '',
                'age' => isset($data['age']) ? $data['age'] : '',
                'bloodgroup' => isset($data['bloodgroup']) ? $data['bloodgroup'] : '',
                'religion' => isset($data['religion']) ? $data['religion'] : '',
                'student_image' => isset($data['student_image']) ? $data['student_image'] : '',

                'admission_no' => isset($data['admission_no']) ? $data['admission_no'] : '',
                'admission_date' => isset($data['admission_date']) ? $data['admission_date'] : '',
                'doj' => isset($data['doj']) ? $data['doj'] : '',
                'school_name' => isset($data['school_name']) ? $data['school_name'] : '',
                'school_city' => isset($data['school_city']) ? $data['school_city'] : '',
                'school_state' => isset($data['school_state']) ? $data['school_state'] : '',
                'school_zip' => isset($data['school_zip']) ? $data['school_zip'] : '',
                'school_mobile' => isset($data['school_mobile']) ? $data['school_mobile'] : '',
                'school_fax' => isset($data['school_fax']) ? $data['school_fax'] : '',
                'school_email' => isset($data['school_email']) ? $data['school_email'] : '',

                'father_name' => isset($data['father_name']) ? $data['father_name'] : '',
                'mother_name' => isset($data['mother_name']) ? $data['mother_name'] : '',
                'occupation' => isset($data['occupation']) ? $data['occupation'] : '',
                'father_mobile' => isset($data['father_mobile']) ? $data['father_mobile'] : '',
                'address' => isset($data['address']) ? $data['address'] : '',
                'city' => isset($data['city']) ? $data['city'] : '',
                'state' => isset($data['state']) ? $data['state'] : '',
               
            ];
           
            if ($request->hasFile('student_image')) {
                $image = $request->file('student_image')->getClientOriginalExtension();
                $rand=substr(number_format(time() * rand(), 0, '', ''), 0, 4);
                $imageName = 'Student' . '-' . $rand . '.' . $image;
                //print_r($imageName);die;
        
                $imagePath = $request->file('student_image')->move(public_path() . '/upload/student', $imageName);
                //print_r($imagePath);die;
                $img = Image::make($imagePath->getRealPath());
        
                
            }

            else{
                $imageName= '';
            }

            $rules = array(
                'firstname' => 'required',
                'lastname' => 'required',
                'dob' => 'required',
                //'email' => 'required',
                'city' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               if($imageName!=''){
                $studentInput = array(
                    'id' => $input['id'],
                    'firstname' => $input['firstname'],
                    'lastname' => $input['lastname'],
                    'dob' => $input['dob'],
                    'email' => $input['email'],
                    'gender' => $input['gender'],
                    'age' => $input['age'],
                    'bloodgroup'=>$input['bloodgroup'],
                    'religion' => $input['religion'],
                    'student_image' => $imageName,

                    'admission_no' => $input['admission_no'],
                    'admission_date' => $input['admission_date'],
                    'doj'=>$input['doj'],
                    'school_name' => $input['school_name'],
                    'school_city'=>$input['school_city'],
                    'school_state' => $input['school_state'],
                    'school_zip' => $input['school_zip'],
                    'school_mobile'=>$input['school_mobile'],
                    'school_fax' => $input['school_fax'],
                    'school_email' => $input['school_email'],


                    'father_name'=>$input['father_name'],
                    'mother_name' => $input['mother_name'],
                    'occupation' => $input['occupation'],
                    'father_mobile'=>$input['father_mobile'],
                    'address' => $input['address'],
                    'city'=>$input['city'],
                    'state'=>$input['state'],
                    'status'=>1,                   
                );
            }else{
                $studentInput = array(
                    'id' => $input['id'],
                    'firstname' => $input['firstname'],
                    'lastname' => $input['lastname'],
                    'dob' => $input['dob'],
                    'email' => $input['email'],
                    'gender' => $input['gender'],
                    'age' => $input['age'],
                    'bloodgroup'=>$input['bloodgroup'],
                    'religion' => $input['religion'],
                    //'student_image' => $imageName,

                    'admission_no' => $input['admission_no'],
                    'admission_date' => $input['admission_date'],
                    'doj'=>$input['doj'],
                    'school_name' => $input['school_name'],
                    'school_city'=>$input['school_city'],
                    'school_state' => $input['school_state'],
                    'school_zip' => $input['school_zip'],
                    'school_mobile'=>$input['school_mobile'],
                    'school_fax' => $input['school_fax'],
                    'school_email' => $input['school_email'],


                    'father_name'=>$input['father_name'],
                    'mother_name' => $input['mother_name'],
                    'occupation' => $input['occupation'],
                    'father_mobile'=>$input['father_mobile'],
                    'address' => $input['address'],
                    'city'=>$input['city'],
                    'state'=>$input['state'],
                    'status'=>1,                   
                );
            }
                $studentid = $this->admission->saveStudent($studentInput);
               
               if ($studentid) {
                return Response::json([
                    'status' => 1,
                    'message' => 'Successfully Created'
                        ], 200);
                //return redirect('admin/studentdetails');
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
