<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function employees()
    {
        return view('employees');
    }   
}
