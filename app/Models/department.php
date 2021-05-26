<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class department extends Model
{
    use HasFactory,Softdeletes;

    protected $table = 'department'


    protected $fillable = [
        'department_name'
        'created_at',
        'updated_at',
        'deleted_at'

    ];    


}
