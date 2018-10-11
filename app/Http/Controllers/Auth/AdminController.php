<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Auth;
use Input;
class AdminController extends Controller
{
    public function _construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     $data=$request->all();
    //   // dd($data);
    //   $validation =  Validator::make($request->all(), [
    //     'email'   => 'required|string',
    //     'password'    => 'required|string',
       
    //  ]);

    //     // $this->validate($request,[
    //     //     'email'=>'requried|email',
    //     //     'password'=>'requried|min:6'
    //     // ]);
    //     $verifyuser = DB::table('users')->where('email', $request->email)->first();
    //     //dd($verifyuser);

    //     if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
    //     {
    //         dd($verifyuser);
    //         return redirect()->intended(route('admin.dashboard'));
    //     }
    //     return redirect()->back()->withInput($request->only('email','remember'));
    // }
public function login()
{
// validate the info, create rules for the inputs
$rules = array(
    'email'    => 'required|email', // make sure the email is an actual email
    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
);

// run the validation rules on the inputs from the form
$validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
if ($validator->fails()) {
    return Redirect::to('login')
        ->withErrors($validator) // send back all errors to the login form
        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
} else {

    // create our user data for the authentication
    $userdata = array(
        'email'     => Input::get('email'),
        'password'  => Input::get('password')
    );

  $verifyuser = DB::table('users')->where('email', $userdata['email'])->first();

    // attempt to do the login
    if (Auth::attempt($userdata)) {
        //dd($verifyuser);
            if($verifyuser->role_id==2){
                    return redirect('staff/dashboard');
                }
                if($verifyuser->role_id==1){
                    return redirect('admin/dashboard');
                }

    } else {        

        // validation not successful, send back to form 
        return Redirect::to('login');

    }

}
}
}
