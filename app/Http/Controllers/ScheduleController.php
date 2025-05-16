<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
{
    $schedules = Schedule::with('course')->get();
    return view('schedule', compact('schedules'));
}
}
