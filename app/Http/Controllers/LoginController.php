<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');

    }

    public function table()
    {
        return view('table');

    }
    public function layout()
    {
        return view('layout');

    }
    public function form()
    {
        return view('form');

    }
    public function create_department()
    {
        return view('create.department');

    }
    public function create_deduction()
    {
        return view('create.deduction');

    }
    public function create_payslip()
    {
        return view('create.payslip');

    }
    public function create_employees()
    {
        return view('create.employees');

    }
    public function create_loan()
    {
        return view('create.loan');

    }
    public function create_timekeeping()
    {
        return view('create.timekeeping');

    }
    public function create_leaves()
    {
        return view('create.leaves');

    }
}
