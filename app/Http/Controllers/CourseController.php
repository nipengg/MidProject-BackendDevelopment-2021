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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Course $course)
    {
        //
    }

    public function edit(Course $course)
    {
        //
    }

    public function update(Request $request, Course $course)
    {
        //
    }

    public function destroy(Course $course)
    {
        //
    }
}
