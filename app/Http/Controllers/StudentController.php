<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function show()
    {
        return "list of students";
    }

    public function add()
    {
        return "student added";
    }

    public function delete()
    {
        return "Deleted Students";
    }

    public function about($name)
    {
        return $name;
    }
}
