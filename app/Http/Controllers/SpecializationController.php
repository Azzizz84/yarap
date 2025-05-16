<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function update(Request $request)
{
    $student = Student::find(auth()->id());
    $student->update(['specialization' => $request->specialization]);
    return redirect()->back()->with('success', 'Specialization updated successfully.');
}
}
