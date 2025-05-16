<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\TestController;

    // Add other protected routes here
    Route::get('/', function () {
        return view('welcome'); // Homepage
    });
   
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // Student Grades
        Route::get('/grades', [GradeController::class, 'index'])->name('grades');
      // Download Materials
       Route::get('/materials', [MaterialController::class, 'index'])->name('materials');
        Route::get('/materials/download/{id}', [MaterialController::class, 'download'])->name('materials.download');

// Change Specialization
Route::get('/specialization', [SpecializationController::class, 'index'])->name('specialization');
Route::post('/specialization/update', [SpecializationController::class, 'update'])->name('specialization.update');

// Assignments and Tests
Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments');
Route::get('/tests', [TestController::class, 'index'])->name('tests');
    });
    
    require __DIR__.'/auth.php';
    

       // Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
