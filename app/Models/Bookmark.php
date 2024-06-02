<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'job_id'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class,'job_id');
    }
}
