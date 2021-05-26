<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
])->name('login');

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
])->name('table');

Route::get('/load', [
    App\Http\Controllers\LoginController::class,
    'load'
])->name('load');

Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
])->name('layout');

Route::get('/employees', [
    App\Http\Controllers\EmpController::class,
    'employees'
])->name('employees');

Route::get('/department', [
    App\Http\Controllers\DPController::class,
    'department'
])->name('department');

Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class,
    'leaves'
])->name('leaves');

Route::get('/deduction', [
    App\Http\Controllers\DedController::class,
    'deduction'
])->name('deduction');

Route::get('/loan', [
    App\Http\Controllers\LoanController::class,
    'loan'
])->name('cloan');

Route::get('/payslip', [
    App\Http\Controllers\PayslipController::class,
    'payslip'

])->name('payslip');

Route::get('/timekeeping', [
    App\Http\Controllers\TKController::class,
    'timekeeping'

])->name('timekeeping');

Route::get('/form', [
    App\Http\Controllers\loginController::class,
    'form'

])->name('form');

Route::get('/create_department', [
    App\Http\Controllers\loginController::class,
    'create_department'

])->name('create_department');

Route::get('/create_payslip', [
    App\Http\Controllers\loginController::class,
    'create_payslip'

])->name('create_;payslip');

Route::get('/create_leaves', [
    App\Http\Controllers\loginController::class,
    'create_leaves'

])->name('create_leaves');

Route::get('/create_deduction', [
    App\Http\Controllers\loginController::class,
    'create_deduction'

])->name('create_deduction');

Route::get('/create_employees', [
    App\Http\Controllers\loginController::class,
    'create_employees'

])->name('create_employees');

Route::get('/create_loan', [
    App\Http\Controllers\loginController::class,
    'create_loan'

])->name('create_loan');

Route::get('/create_timekeeping', [
    App\Http\Controllers\loginController::class,
    'create_timekeeping'

]);->name('create_timekeeping');

Route::get('Tkview', [
    App\Http\Controllers\TKController::class,
    'Tkview'

])->name('TKview');

Route::get('payslipview', [
    App\Http\Controllers\PayslipController::class,
    'payslipview'

])->name('payslipview');