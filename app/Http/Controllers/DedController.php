<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DedController extends Controller
{
    public function deduction()
    {
        return view('deduction');
    }   
}
