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
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Welcome page (accessible to everyone)
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');

    Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); 
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register'); 

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); 

// Logout route (accessible to authenticated users only)
Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

// Dashboard and other protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

    // Dashboard quick links (replace with actual routes)
    Route::get('/students', [DashboardController::class, 'students'])->name('students');
    Route::get('/courses', [DashboardController::class, 'courses'])->name('courses');
    Route::get('/exams', [DashboardController::class, 'exams'])->name('exams');
    Route::get('/payments', [DashboardController::class, 'payments'])->name('payments');
    Route::get('/attendance', [DashboardController::class, 'attendance'])->name('attendance');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');

    // Resourceful routes for different modules
    Route::resource('projects', ProjectController::class);
    Route::resource('exams', ExamController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('students', StudentController::class);
    Route::resource('staff', StaffController::class);

    // Attendance related routes
    Route::post('/attendances/mark', [AttendanceController::class, 'markAttendance'])->name('attendance.mark');
    Route::get('/attendances/report', [AttendanceController::class, 'viewAttendanceReport'])->name('attendance.report');

    // Library book related routes
    Route::get('/library/books', [LibraryBookController::class, 'index'])->name('library.books');
});

// Include auth-related routes
require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/teacher-auth.php';
