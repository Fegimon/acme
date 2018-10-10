<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $data=$request->all();
         dd($data);
         $userrs = Sentinel::registerAndActivate($data);
         dd($userrs);
         return redirect('/');
    }

    public function login(Request $request)
    {
        $data=$request->all();
        //dd($data);

        $uname="admin";
        $pwd="admin";
        if ($data != null) {

                $input = [
                    'id' => isset($data['id']) ? $data['id'] : false,
                    'username' => isset($data['username']) ? $data['username'] : '',
                    'password' => isset($data['password']) ? $data['password'] : '',
                ];
            }

            if ($uname==$input['username']&&$pwd==$input['password']){
                return redirect('dashboard');
                // return Response::json([
                //             'status' => 1,
                //             'message' => 'successfully created',
                //                 ], 200);
            } else {
                //print_r("error");die;
                return Response::json([
                            'status' => 0,
                            'message' => 'Please provide valid details'
                                ], 400);
            }
            // if($uname==$input['username']&&$pwd==$input['password']){
            //     return redirect('/');
            // }
         
    }
}
