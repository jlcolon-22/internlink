<?php

namespace App\Livewire\Student;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Chat extends Component
{
    public $id;
    public function mount()
    {
        $convo = \App\Models\Convo::where('user_id',Auth::guard('student')->id())->first();
        if(!$convo)
        {
            $admin = User::first();
            $convo = \App\Models\Convo::create([
                'admin_id' => $admin->id,
                'user_id' => Auth::guard('student')->id(),
                'type'=>'student'
            ]);

        }
        $this->id = $convo->id;
    }
    public function messageSend($value)
    {

        \App\Models\Message::create([

            'convo_id'=>$this->id,
            'body'=>$value,
            'sender'=>'student'
        ]);
    }
    public function render()
    {
        $convo = \App\Models\Convo::where('user_id',Auth::guard('student')->id())->first();

        $messages = \App\Models\Message::where('convo_id',$convo->id)->get();


        return view('livewire.student.chat',compact('convo','messages'));
    }
}
