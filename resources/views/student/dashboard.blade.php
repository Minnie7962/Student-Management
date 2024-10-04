@extends('layouts.dashboard')

@section('title', 'Student Dashboard')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4">Student Dashboard</h1>

        <!-- Quick Stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Current GPA</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ number_format($currentGPA, 2) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class='bx bxs-bar-chart-alt-2 bx-lg text-gray-300'></i>
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
                                    Attendance Rate</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $attendanceRate }}%</div>
                            </div>
                            <div class="col-auto">
                                <i class='bx bxs-calendar-check bx-lg text-gray-300'></i>
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
                                <i class='bx bxs-notepad bx-lg text-gray-300'></i>
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
                                    Due Fees</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">${{ number_format($dueFees, 2) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class='bx bxs-dollar-circle bx-lg text-gray-300'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Current Courses -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Current Courses</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Course</th>
                                        <th>Teacher</th>
                                        <th>Progress</th>
                                        <th>Grade</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($currentCourses as $course)
                                    <tr>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->teacher->name }}</td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" data-progress="{{ $course->progress }}%">
                                                    {{ $course->progress }}%
                                                </div>
                                            </td>
                                        <td>{{ $course->grade ?? 'N/A' }}</td>
                                        <td>
                                            < a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-info">
                                                <i class='bx bx-show'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Assignments -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Upcoming Assignments</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Assignment</th>
                                        <th>Course</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($upcomingAssignments as $assignment)
                                    <tr>
                                        <td>{{ $assignment->title }}</td>
                                        <td>{{ $assignment->course->name }}</td>
                                        <td>{{ $assignment->due_date->format('M d, Y') }}</td>
                                        <td>
                                            @if($assignment->submitted)
                                                <span class="badge bg-success">Submitted</span>
                                            @else
                                                <span class="badge bg-warning">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-5">
                <!-- Today's Schedule -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Today's Schedule</h6>
                    </div>
                    <div class="card-body">
                        @foreach($todaySchedule as $schedule)
                        <div class="mb-3 p-2 border-left-info border">
                            <div class="small text-gray-500">{{ $schedule->start_time }} - {{ $schedule->end_time }}</div>
                            <div class="font-weight-bold">{{ $schedule->course->name }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection