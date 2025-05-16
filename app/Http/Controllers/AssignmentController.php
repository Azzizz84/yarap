<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
{
    $assignments = Assignment::where('student_id', auth()->id())->get();
    return view('assignments', compact('assignments'));
}
}
