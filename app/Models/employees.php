<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class employees extends Model
{
    use HasFactory,Softdeletes;

    protected $table = 'employees'

    protected $fillable = [
        'photo',
        'full_name',
        'last_name',
        'middle_initial',
        'contact',
        'address',
        'designation',
        'birthday',
        'rate',
        'gender',
        'department_id',
        'SSS',
        'PhilHealth',
        'Pagibig',
        'tax'
        'created_at',
        'updated_at',
        'deleted_at'
        
    ];   


}
