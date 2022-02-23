<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Enroll;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CourseController extends Controller
{
    public function index()
    {
        $items = Course::all();

        return view('course', ['items' => $items]);
    }

    public function show(Course $course, $id)
    {
        $userId = Auth::user()->id;
        $courseId = $id;
        $enroll = Enroll::with(['user', 'course'])->where('user_id', $userId)->where('course_id', $courseId)->get();
        $item = Course::findOrFail($courseId);

        return view('course.detail', ['item' => $item, 'enroll' => $enroll]);
    }
}
