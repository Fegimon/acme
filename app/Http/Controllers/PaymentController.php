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

    public function addexpense(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                'name' => isset($data['name']) ? $data['name'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'payment_method' => isset($data['payment_method']) ? $data['payment_method'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'date' => isset($data['date']) ? $data['date'] : '',
                
            ];
           
           

            $rules = array(
                'category' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'amount'   => 'required',
                'payment_method' => 'required',
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
                    'category' => $input['category'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'amount' => $input['amount'],
                    'payment_method'=>$input['payment_method'],
                    'date' => $input['date'],
                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->saveExpense($paymentInput);
               
               if ($paymentid) {
                   
                return redirect('admin/expenselist');
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
    public function addincome(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'category' => isset($data['category']) ? $data['category'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                'name' => isset($data['name']) ? $data['name'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'payment_method' => isset($data['payment_method']) ? $data['payment_method'] : '',
                'email' => isset($data['email']) ? $data['email'] : '',
                'date' => isset($data['date']) ? $data['date'] : '',
                
            ];
           
           

            $rules = array(
                'category' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'amount'   => 'required',
                'payment_method' => 'required',
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
                    'category' => $input['category'],
                    'email' => $input['email'],
                    'phone' => $input['phone'],
                    'amount' => $input['amount'],
                    'payment_method'=>$input['payment_method'],
                    'date' => $input['date'],
                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->saveIncome ($paymentInput);
               
               if ($paymentid) {
                   
                return redirect('admin/expenselist');
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
    public function addpaymentdetails(Request $request)
    {
        $data=$request->all();
         //dd($data);

        if ($data != null) {

            $input = [
                'id' => isset($data['id']) ? $data['id'] : false,
                'payment_category' => isset($data['payment_category']) ? $data['payment_category'] : '',
                'category' => isset($data['category']) ? $data['category'] : '',
                'amount' => isset($data['amount']) ? $data['amount'] : '',
                'name' => isset($data['name']) ? $data['name'] : '',
                'payment_method' => isset($data['payment_method']) ? $data['payment_method'] : '',
                'phone' => isset($data['phone']) ? $data['phone'] : '',
                'date' => isset($data['date']) ? $data['date'] : '',
                'comments' => isset($data['comments']) ? $data['comments'] : '',
                'otherpay' => isset($data['otherpay']) ? $data['otherpay'] : '',
                'othercat' => isset($data['othercat']) ? $data['othercat'] : '',

                
            ];
           
           

            $rules = array(
                'payment_category' => 'required',
                'category' => 'required',
                'phone' => 'required',
                'amount'   => 'required',
                'payment_method' => 'required',
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
                    'payment_category' => $input['payment_category'],
                    'category' => $input['category'],
                    'amount' => $input['amount'],
                    'user_id' => $input['name'],
                    'payment_method' => $input['payment_method'],
                    'phone' => $input['phone'],
                    'date'=>$input['date'],
                    'comments' => $input['comments'],
                    'other_category'=>$input['othercat'],
                    'otherpay'=>$input['otherpay'],

                    'status'=>1,
                   
                );
               //dd($paymentInput);
                $paymentid = $this->payment->savePaymentdetails ($paymentInput);
               
               if ($paymentid) {
                   
                return redirect('backend/paymentdetails');
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