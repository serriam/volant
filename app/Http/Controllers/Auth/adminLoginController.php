<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class adminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function admins()
    {
        return view('auth.admin.admin');
    }

    public function adminlogin(Request $request){

        // dd($request);
        //validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //Attempt to log the user in

        // dd(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember));

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect('/admin');
        }
        // if unsuccesful the redirect to the login
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

 public function logout(Request $request)
    {

        Auth::guard('admin')->logout();

        // $request->session()->invalidate();

        return redirect('/');
    }
}
