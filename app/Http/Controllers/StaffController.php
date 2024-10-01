<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->save();
        return redirect()->route('staff.index');
    }

    public function show($id)
    {
        $staff = Staff::find($id);
        return view('staff.show', compact('staff'));
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('staff.edit', compact('staff'));
    }
    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->name = $request->input('name');
        $staff->email = $request->input('email');
        $staff->save();
        return redirect()->route('staff.index');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
