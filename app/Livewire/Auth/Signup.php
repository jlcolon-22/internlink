<?php

namespace App\Livewire\Auth;

use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Filament\Notifications\Notification;

class Signup extends Component
{
    public $firstname;
    public $lastname;
    public $student_number;
    public $email;
    public $course;
    public $mobile_number;
    public $password;
    public $password_confirmation;

    public function signup()
    {
        $this->validate([
            'email' => 'required|unique:students,email',
            'firstname' => 'required',
            'lastname' => 'required',
            'student_number' => 'required',
            'mobile_number' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        Student::query()
            ->create([
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'student_number' => $this->student_number,
                'mobile_number' => $this->mobile_number,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'course' => $this->course,
            ]);
        // REGISTRATION SUCCESSFUL
        Notification::make()
            ->title('Registration Successful!')
            ->success()
            ->send();
            $this->reset();
    }

    public function render()
    {
        return view('livewire.auth.signup');
    }
}
