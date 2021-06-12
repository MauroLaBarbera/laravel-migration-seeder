<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class HolidayController extends Controller
{
    //ARCHIVE HOLIDAYS

    public function holidays(){
        //$holidays = Holiday::all();
        $holidays = Holiday::paginate(5);
        //dump($holidays);

        return view('holidays', compact('holidays'));
    }
}
