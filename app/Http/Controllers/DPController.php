<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

class DPController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }   
    public function department()
    {
       
        return view('department');
    }  
    public function save()
    {
        department::create(
            $this->request->except('_token')

    ); 

       return Redirect::route('create_department');
    }
}
