<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryBook extends Model
{
    protected $fillable = [
        'title',
        'author',
        'publisher',
        'published_date',
        'isbn',
        'quantity',
    ];
}
