<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

class Clock_In extends Model
{
    protected $fillable = [
    'name',
    'timein',
    'start',
    'end',
    'out'

    ];
}
