<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Message extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;

    }
    public function messageSend($value)
    {
        \App\Models\Message::create([

            'convo_id'=>$this->id,
            'body'=>$value,
            'sender'=>'admin'
        ]);
    }
    public function render()
    {

        $messages = \App\Models\Message::where('convo_id',$this->id)->get();
        $convo = \App\Models\Convo::with('company','student')->where('id',$this->id)->first();
        return view('livewire.admin.message',compact('messages','convo'));
    }
}
