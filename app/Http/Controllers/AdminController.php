<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// add database model user for user page
use App\Models\User;
// add database food model for foodmenu page
use App\Models\Food;

class AdminController extends Controller
{
    //
    public function user(){
        $data = user::all();
        return view("admin.user", compact("data"));
    }

    public function deleteuser($id){
        $data = user::find($id);
        $data->delete();
        // return to user page after delete the data
        return redirect()->back();
    }

    public function foodmenu() {
        return view("admin.foodmenu");
    }
    public function upload(Request $request) {
        // food is from the database name
        $data = new food;
        // image is from the name of the input in foodmenu.blade.php
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image=$imagename;
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
}
