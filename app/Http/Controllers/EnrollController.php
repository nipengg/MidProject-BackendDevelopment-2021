<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EnrollController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $items = Enroll::with(['user', 'course'])->where('user_id', $userId)->get();

        return view('dashboard', ['items' => $items]);
    }

    public function store($id)
    {
        $courseId = $id;
        $date = Carbon::now()->toDateTimeString();
        $userId = Auth::user()->id;

        DB::insert("
            INSERT INTO enrolls
            (user_id, course_id, created_at, updated_at)
            VALUES (?, ?, ?, ?)
        ", [$userId, $courseId, $date, $date]);

        DB::commit();

        return redirect('/dashboard');
    }

    public function unenrolled($id)
    {
        $courseId = $id;
        $userId = Auth::user()->id;
        $en = Enroll::where('user_id', $userId)->where('course_id', $courseId);
        $en->delete();

        return redirect('/dashboard');
    }
}
