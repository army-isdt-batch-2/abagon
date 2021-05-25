<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DPController extends Controller
{
    public function department()
    {
        return view('department');
    }   
}
