<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\User;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = orders::orderBy('id', 'desc')->paginate(10);
        $orderm = orders::orderBy('id', 'desc')->where('mark', '=', 0)->get();
        $ordercount = orders::orderBy('id', 'desc')->count();
        $usercount = User::orderBy('id', 'desc')->count();
        $ncount = orders::where('mark', '=', 0)->get()->count();
        return view('admin.dashboard')->withorder($order)->withordercount($ordercount)->withusercount($usercount)->withncount($ncount)->withorderm($orderm);
    }

    public function latest()
    {
        $orderm = orders::orderBy('id', 'desc')->where('mark', '=', 0)->get();
        $ordercount = orders::orderBy('id', 'desc')->count();
        $usercount = User::orderBy('id', 'desc')->count();
        $ncount = orders::where('mark', '=', 0)->get()->count();

        return view('admin.latest')->withorderm($orderm)->withordercount($ordercount)->withusercount($usercount)->withncount($ncount);
    }
}
