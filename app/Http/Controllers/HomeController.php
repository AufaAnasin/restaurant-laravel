<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    // making for 2 types of user direct page
    public function redirects(){
        // get the login type of user based on the database
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        } else {
            return view('home');
        }
    }
}
