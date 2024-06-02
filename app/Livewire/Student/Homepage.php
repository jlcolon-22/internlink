<?php

namespace App\Livewire\Student;

use App\Models\Company;
use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        $companies = Company::withCount('jobs')->where('status',1)->get();

        return view('livewire.student.homepage',compact('companies'));
    }
}
