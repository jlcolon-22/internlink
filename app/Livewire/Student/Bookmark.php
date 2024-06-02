<?php

namespace App\Livewire\Student;

use App\Models\Job;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Bookmark extends Component
{
    public function render()
    {
        $jobs = \App\Models\Bookmark::with(['job' => function($q){
            return $q->with('company');
        }])->where('student_id',Auth::guard('student')->id())->orderBy('id','desc')->get();

        return view('livewire.student.bookmark',compact('jobs'));
    }
}
