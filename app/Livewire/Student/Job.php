<?php

namespace App\Livewire\Student;

use Livewire\Component;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class Job extends Component
{
    public $id;
    public function mount($job,$id)
    {
        $this->id = $id;
    }

    public function bookmarktoggle()
    {
        $check = Bookmark::where('student_id',Auth::guard('student')->id())->where('job_id',$this->id)->first();
        if($check)
        {
            $check->delete();
        }else{
            Bookmark::create([
                'student_id'=>Auth::guard('student')->id(),
                'job_id'=>$this->id
            ]);
        }
    }
    public function render()
    {
        $job = \App\Models\Job::with('company')->where('id',$this->id)->first();

        $bookmark = Bookmark::where('student_id',Auth::guard('student')->id())->where('job_id',$this->id)->first();
        return view('livewire.student.job',compact('job','bookmark'));
    }
}
