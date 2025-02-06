<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            "username" => "required",
            "email" => "required|email",
            "city" => "required|max:20"
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
