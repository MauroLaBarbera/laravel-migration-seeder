<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolidayController extends Controller
{
    //ARCHIVE HOLIDAYS

    public function holidays(){
        return view('holidays');
    }
}
