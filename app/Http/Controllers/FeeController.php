<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;
use App\Models\Course;

class FeeController extends Controller
{
    public function index()
    {
        $fees = Fee::with('course')->get(); // Eager load relationships
        return view('fees.index', compact('fees'));
    }
    public function create()
    {
        $courses = Course::all(); 
        return view('fees.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
            'course_id' => 'nullable|exists:courses,id' // Assuming course is optional
        ]);

        Fee::create($request->all());

        return redirect()->route('fees.index')
                         ->with('success', 'Fee created successfully!');
    }

    public function show(Fee $fee)
    {
        return view('fees.show', compact('fee'));
    }

    public function edit(Fee $fee)
    {
        $courses = Course::all();
        return view('fees.edit', compact('fee', 'courses'));
    }

    public function update(Request $request, Fee $fee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'amount' => 'required|numeric',
            'due_date' => 'required|date',
            'course_id' => 'nullable|exists:courses,id'
        ]);

        $fee->update($request->all());

        return redirect()->route('fees.index')
                         ->with('success', 'Fee updated successfully!');
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect()->route('fees.index')
                         ->with('success', 'Fee deleted successfully!');
    }
}
