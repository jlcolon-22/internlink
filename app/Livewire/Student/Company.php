<?php

namespace App\Livewire\Student;

use Livewire\Component;

class Company extends Component
{

    public $id;
    public function mount($company,$id)
    {
        $this->id = $id;
    }
    public function render()
    {
        $company = \App\Models\Company::query()->where('id',$this->id)->first();
        $jobs = \App\Models\Job::where('company_id',$this->id)->get();
        return view('livewire.student.company',compact('company','jobs'));
    }
}
