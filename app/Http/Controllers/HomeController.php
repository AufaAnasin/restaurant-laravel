<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// make home page have access into the food table
use App\Models\Food;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        // it will return view with data that already uploaded
        return view("home", compact("data"));
    }
    // making for 2 types of user direct page
    public function redirects(){
        // get the login type of user based on the database
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminhome', compact("data"));
        } else {
            return view('home', compact("data"));
        }
    }
}
