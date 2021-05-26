<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class leaves extends Model
{
    use HasFactory,Softdeletes;


    protected $table = 'leaves'

        protected $fillable = [
        'start_date',
        'end_date',
        'note',
        'leave_type'
        'created_at',
        'updated_at',
        'deleted_at'

    ]; 




}
