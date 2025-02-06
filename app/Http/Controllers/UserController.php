<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            "username" => "required|min:3 |max:20",
            "email" => "required|email",
            "city" => "required|uppercase"
        ], [
            "username.required" => "username cannot be empty",
            "username.min" => "username cannot be less than 3 characters",
            "username.max" => "username cannot be more than 20 characters",
            "email.required"=>"Please enter valid email",
            "city.uppercase"=>"City must be in uppercase",      //For custom uppercase validation
        ]);
        echo $request->username;
        echo "<br>";
        echo $request->email;
        echo "<br>";
        echo $request->city;
    }

    public function view()
    {
        return view('user-form');
    }
}
