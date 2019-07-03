<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Admins;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class adminRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function register_admin()
    {
        return view('auth.admin.admin_register');
    }

    /**
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    protected function createAdmin(Request $request)
    {

      $this->validate($request, array(
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
      ));

        // dd($request);

        $Admin = new Admins();

        $Admin->name = $request->name;
        $Admin->email = $request->email;
        $Admin->password = Hash::make($request->password);

        $Admin->save();

        return redirect()->intended('/admin');
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin')->except('logout');
    }
}
