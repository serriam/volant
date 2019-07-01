<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class pagesController extends Controller
{
    public function getIndex(){
    	return view('delivery.index');
    }

    public function getContact(){
    	return view('pages.contact');
    }

    public function getPackage(){
    	return view('delivery.packages');
    }
}
