<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class deduction extends Model
{
    use HasFactory,Softdeletes;

    protected $table = 'deduction'


    protected $fillable = [
        'contribution_type',
        'basic_range',
        'employer_share',
        'employee_share',
        'montly_contribution'
        'created_at',
        'updated_at',
        'deleted_at'

    ];
}
