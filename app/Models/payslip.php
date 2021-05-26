<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class payslip extends Model
{
    use HasFactory,Softdeletes;

    protected $table = 'payslip'

    protected $fillable = [
        'clock_start',
        'clock_end'
        'created_at',
        'updated_at',
        'deleted_at'
    ];


}
