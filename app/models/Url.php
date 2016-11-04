<?php

namespace App\Models;

use Scara\Http\Model;

class Url extends Model
{
    // Table name here
    protected $table = 'urls';

    // Mutable fields here
    protected $fillable = ['urlid','url'];
}
