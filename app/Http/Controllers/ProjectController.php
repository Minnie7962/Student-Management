<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Course;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('course')->get(); // Eager load course data
        return view('projects.index', compact('projects')); 
    }
    public function create()
    {
        $courses = Course::all(); // Get all courses to display in a dropdown (for example)
        return view('projects.create', compact('courses'));
    }

    public function store(Request $request)
    {
        // 1. Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'nullable|date',
            'course_id' => 'required|exists:courses,id', // Ensure course exists
        ]);

        // 2. Create the project
        $project = Project::create($request->all());

        // 3. Redirect to a relevant page (e.g., the project details page)
        return redirect()->route('projects.show', $project);
    }

    public function show(Project $project)
    {
        // $project will be automatically loaded based on the route parameter 
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $courses = Course::all();
        return view('projects.edit', compact('project', 'courses'));
    }

    public function update(Request $request, Project $project)
    {
        // 1. Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline' => 'nullable|date',
            'course_id' => 'required|exists:courses,id',
        ]);

        // 2. Update the project
        $project->update($request->all());

        // 3. Redirect 
        return redirect()->route('projects.show', $project); 
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
