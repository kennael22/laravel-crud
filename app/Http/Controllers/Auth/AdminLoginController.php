<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class AdminLoginController extends Controller
{
    public function __contruct(){
        $this->middleware('admin');
    }
    public function showLoginForm(){
        return view('auth.adminlogin');
    }
    public function index(){
        // $data['view']='pages.about';
        // return view('pages.about');
    }
    public function login(Request $request){
        //vaidate the form
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
            ]);

        //attemp to login user
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            //if successfull redirect the user to intended location
            return redirect()->intended('admin.dashboard');

        }

        //if unsuccessfull redirect to login form
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
