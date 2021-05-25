<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table', [
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/load', [
    App\Http\Controllers\LoginController::class,
    'load'
]);
Route::get('/layout', [
    App\Http\Controllers\LoginController::class,
    'layout'
]);
Route::get('/employees', [
    App\Http\Controllers\EmpController::class,
    'employees'
]);
Route::get('/department', [
    App\Http\Controllers\DPController::class,
    'department'
]);
Route::get('/leaves', [
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);
Route::get('/deduction', [
    App\Http\Controllers\DedController::class,
    'deduction'
]);
Route::get('/loan', [
    App\Http\Controllers\LoanController::class,
    'loan'
]);
Route::get('/payslip', [
    App\Http\Controllers\PayslipController::class,
    'payslip'
]);
Route::get('/timekeeping', [
    App\Http\Controllers\TKController::class,
    'timekeeping'

]);
Route::get('/form', [
    App\Http\Controllers\loginController::class,
    'form'

]);

Route::get('/create_department', [
    App\Http\Controllers\loginController::class,
    'create_department'

]);
Route::get('/create_payslip', [
    App\Http\Controllers\loginController::class,
    'create_payslip'

]);
Route::get('/create_leaves', [
    App\Http\Controllers\loginController::class,
    'create_leaves'

]);
Route::get('/create_deduction', [
    App\Http\Controllers\loginController::class,
    'create_deduction'

]);
Route::get('/create_employees', [
    App\Http\Controllers\loginController::class,
    'create_employees'

]);
Route::get('/create_loan', [
    App\Http\Controllers\loginController::class,
    'create_loan'

]);
Route::get('/create_timekeeping', [
    App\Http\Controllers\loginController::class,
    'create_timekeeping'

]);
Route::get('Tkview', [
    App\Http\Controllers\TKController::class,
    'Tkview'

]);
Route::get('payslipview', [
    App\Http\Controllers\PayslipController::class,
    'payslipview'

]);