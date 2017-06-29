<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //
    protected $fillable = ['full_name', 'matric_no', 'class', 'dept', 'year', 'checker'];
}
