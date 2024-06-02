<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Messages extends Component
{
    public function render()
    {
        $messages = \App\Models\Convo::with('company','student')->where('admin_id',Auth::guard('web')->id())->get();

        return view('livewire.admin.messages',compact('messages'));
    }
}
