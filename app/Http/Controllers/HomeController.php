<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return "Student List";
    }

    public function add()
    {
        return "Add Student";
    }
}
