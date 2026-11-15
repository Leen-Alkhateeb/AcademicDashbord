<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use App\Models\Lecturer;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
       
        $lecturers = Lecturer::all(); 
        $courses = Course::all();
        $lectures = Lecture::all();
        $enrollments = DB::table('course_user')->count();

        return view('dashboard', compact('lecturers', 'courses', 'lectures', 'enrollments'));
    }
}