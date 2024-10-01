<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function students()
    {
        return view('students');
    }

    public function courses()
    {
        return view('courses');
    }

    public function exams()
    {
        return view('exams');
    }

    public function payments()
    {
        return view('payments');
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function settings()
    {
        return view('settings');
    }
}
