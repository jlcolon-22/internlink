<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;

class Login extends Component
{

    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $password;

    public function signin()
    {
        $this->validate();
        if(Auth::guard('web')->attempt(['email' => $this->email,'password'=> $this->password]))
        {
            $this->redirectRoute('admin.homepage');
        }elseif(Auth::guard('student')->attempt(['email' => $this->email,'password'=> $this->password]))
        {
            $this->redirectRoute('student.homepage');
        }elseif(Auth::guard('company')->attempt(['company_email' => $this->email,'password' => $this->password]))
        {
            $this->redirectRoute('company.homepage');
        }
        else{
            Notification::make()
            ->title('Wrong Credentials!')
            ->danger()
            ->send();
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
