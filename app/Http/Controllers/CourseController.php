<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        $item = Course::findOrFail($id);

        return view('course.detail', ['item' => $item]);
    }
}
