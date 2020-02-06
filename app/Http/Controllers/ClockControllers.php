<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Models\Clock_In;
use Illuminate\Support\Facades\Input;

class ClockControllers extends Controller
{
    public function Check_In(Request $request)
    {
 
        $name = Input::get('name');
        $time = Input::get('timein');  
        $data = array('name' => $request->$name, 'timein' => $request->$time);
        $task = Clock_In::create($data);
        return redirect()->to('/clock');
    }

    public function Break(Request $request){


    }

}