<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Student;
use App\Models\Course;

class AttendanceController extends Controller
{
    public function markAttendance(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
            'date' => 'required|date',
            'present' => 'required|boolean'
        ]);

        Attendance::create($request->all());

        return redirect()->route('attendance.report')
                         ->with('success', 'Attendance marked successfully!');
    }

    public function viewAttendanceReport(Request $request)
    {
        $request->validate([
            'student_id' => 'nullable|exists:students,id',
            'course_id' => 'nullable|exists:courses,id',
            'date' => 'nullable|date'
        ]);

        $students = Student::all();
        $courses = Course::all();

        $attendance = Attendance::query();

        if ($request->input('student_id')) {
            $attendance->where('student_id', $request->input('student_id'));
        }

        if ($request->input('course_id')) {
            $attendance->where('course_id', $request->input('course_id'));
        }

        if ($request->input('date')) {
            $attendance->whereDate('date', $request->input('date'));
        }

        $attendance = $attendance->get();

        return view('attendance.report', compact('attendance', 'students', 'courses'));
    }
    public function report()
    {
        $attendances = Attendance::with('student')->get();
        return view('attendance.report', compact('attendances'));
    }
}