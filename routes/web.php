<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LibraryBookController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return redirect()->route('login');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Protected routes
Route::middleware('auth')->group(function () {
    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Role-based dashboard routes
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])
            ->name('admin.dashboard');
    });

    Route::middleware('role:teacher')->group(function () {
        Route::get('/teacher/dashboard', [DashboardController::class, 'teacherDashboard'])
            ->name('teacher.dashboard');
    });

    Route::middleware('role:student')->group(function () {
        Route::get('/student/dashboard', [DashboardController::class, 'studentDashboard'])
            ->name('student.dashboard');
    });

    // Common protected routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Profile management
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    // Resource Controllers
    Route::resources([
        'projects' => ProjectController::class,
        'exams' => ExamController::class,
        'departments' => DepartmentController::class,
        'courses' => CourseController::class,
        'students' => StudentController::class,
        'staff' => StaffController::class,
    ]);

    // Attendance Management
    Route::prefix('attendance')->name('attendance.')->group(function () {
        Route::post('/mark', [AttendanceController::class, 'markAttendance'])->name('mark');
        Route::get('/report', [AttendanceController::class, 'viewAttendanceReport'])->name('report');
    });

    // Library Management
    Route::prefix('library')->name('library.')->group(function () {
        Route::get('/books', [LibraryBookController::class, 'index'])->name('books');
        // Add more library routes as needed
    });

    // Quick Links (Dashboard)
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/quick/students', 'students')->name('quick.students');
        Route::get('/quick/courses', 'courses')->name('quick.courses');
        Route::get('/quick/exams', 'exams')->name('quick.exams');
        Route::get('/quick/payments', 'payments')->name('quick.payments');
        Route::get('/quick/attendance', 'attendance')->name('quick.attendance');
        Route::get('/quick/settings', 'settings')->name('quick.settings');
    });
});