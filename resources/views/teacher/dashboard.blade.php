@extends('layouts.dashboard')

@section('title', 'Teacher Dashboard')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4">Teacher Dashboard</h1>

    <!-- Quick Stats -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                My Courses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCourses }}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-book bx-lg text-gray-300'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Students</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalStudents }}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-user bx-lg text-gray-300'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Pending Assignments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pendingAssignments }}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-calendar-check bx-lg text-gray-300'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Upcoming Exams</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $upcomingExams }}</div>
                        </div>
                        <div class="col-auto">
                            <i class='bx bxs-notepad bx-lg text-gray-300'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- My Courses -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">My Courses</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Students</th>
                                    <th>Schedule</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->code }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->students_count }}</td>
                                    <td>{{ $course->schedule }}</td>
                                    <td>
                                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-info">
                                            <i class='bx bx-show'></i>
                                        </a>
                                        <a href="{{ route('courses.attendance', $course->id) }}" class="btn btn-sm btn-primary">
                                            <i class='bx bx-calendar'></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Today's Schedule -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Today's Schedule</h6>
                </div>
                <div class="card-body">
                    @foreach($todaySchedule as $schedule)
                    <div class="mb-3 p-2 border-left-info border">
                        <div class="small text-gray-500">{{ $schedule->start_time }} - {{ $schedule->end_time }}</div>
                        <div class="font-weight-bold">{{ $schedule->course->name }}</div>
                        <div class="small">Room: {{ $schedule->room }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Recent Submissions -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Recent Submissions</h6>
                </div>
                <div class="card-body">
                    @foreach($recentSubmissions as $submission)
                    <div class="mb-2">
                        <div class="small text-gray-500">{{ $submission->created_at->diffForHumans() }}</div>
                        <div>{{ $submission->student->name }} submitted {{ $submission->assignment->title }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection