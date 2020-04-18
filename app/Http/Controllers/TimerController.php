<?php

namespace App\Http\Controllers;

use App\Timer;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function index()
    {
        $timesheets = Timer::where('project_id')
    }
}
