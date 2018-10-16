<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Validator;
use Response;
use DB;

class PaymentController extends Controller
{
    public function __construct() {
        $this->payment = new Payment();
    }
    public function payment(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'name' => isset($data['name']) ? $data['name'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'mobile' => isset($data['mobile']) ? $data['mobile'] : '',
                'payment_id' => isset($data['payment_id']) ? $data['payment_id'] : '',
                'paymentmethod' => isset($data['paymentmethod']) ? $data['paymentmethod'] : '',
                'paymentapplied' => isset($data['paymentapplied']) ? $data['paymentapplied'] : '',
                'datarecived' => isset($data['datarecived']) ? $data['datarecived'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                
            ];
           
           

            $rules = array(
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'payment_id'   => 'required',
                'paymentmethod' => 'required',
                // 'paymentapplied' => 'required',
                // 'datarecived' => 'required',
                // 'amount' => 'required',
               
            );
            $checkValid = Validator::make($input, $rules);
            if ($checkValid->fails()) {
                return Response::json([
                            'status' => 0,
                            'message' => $checkValid->errors()->all()
                                ], 400);
            } else { 
               
                $paymentInput = array(
                    'id' => $input['id'],
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'mobile' => $input['mobile'],
                    'payment_id' => $input['payment_id'],
                    'paymentmethod'=>$input['paymentmethod'],
                    'paymentapplied' => $input['paymentapplied'],
                    'datarecived' => $input['datarecived'],
                    'amount' => $input['amount'],
                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->savePayment($paymentInput);
               
               if ($paymentid) {
                   
                return redirect('admin/paymentlist');
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