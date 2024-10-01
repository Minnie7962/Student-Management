<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'deadline', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
