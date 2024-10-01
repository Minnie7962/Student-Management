<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Course;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::with('course')->get(); // Eager load course data
        return view('exams.index', compact('exams')); 
    }
    public function create()
    {
        $courses = Course::all();
        return view('exams.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'date_time' => 'required|date_format:Y-m-d\TH:i', // Assuming HTML datetime-local input
            'duration_minutes' => 'required|integer|min:1'
        ]);

        Exam::create($request->all());

        return redirect()->route('exams.index')
                         ->with('success', 'Exam created successfully!');
    }

    public function show(Exam $exam)
    {
        return view('exams.show', compact('exam'));
    }

    public function edit(Exam $exam)
    {
        $courses = Course::all();
        return view('exams.edit', compact('exam', 'courses'));
    }

    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'date_time' => 'required|date_format:Y-m-d\TH:i',
            'duration_minutes' => 'required|integer|min:1'
        ]);

        $exam->update($request->all());

        return redirect()->route('exams.index')
                         ->with('success', 'Exam updated successfully!');
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index')
                         ->with('success', 'Exam deleted successfully!');
    }
}
