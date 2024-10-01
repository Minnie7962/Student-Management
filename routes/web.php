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
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/students', [DashboardController::class, 'students'])->name('students');
Route::get('/courses', [DashboardController::class, 'courses'])->name('courses');
Route::get('/exams', [DashboardController::class, 'exams'])->name('exams');
Route::get('/payments', [DashboardController::class, 'payments'])->name('payments');
Route::get('/attendance', [DashboardController::class, 'attendance'])->name('attendance');
Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');

Route::resource('projects', ProjectController::class);
Route::resource('exams', ExamController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);
Route::resource('staff', StaffController::class);
Route::post('/attendances/mark', [AttendanceController::class, 'markAttendance'])->name('attendance.mark');
Route::get('/attendances/report', [AttendanceController::class, 'viewAttendanceReport'])->name('attendance.report');
Route::get('/library/books', [LibraryBookController::class, 'index'])->name('library.books');

require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/teacher-auth.php';