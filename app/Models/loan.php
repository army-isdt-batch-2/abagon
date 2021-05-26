<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class loan extends Model
{
    use HasFactory,Softdeletes;

    protected $table = 'loan'

    protected $fillable = [

    'amount',
    'months_payable',
    'note',
    'laon_type',
    'created_at',
    'updated_at',
    'deleted_at'

    ];


}
