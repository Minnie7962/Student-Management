<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'academic_details',
        'attendance_records',
    ];
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
