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
}
