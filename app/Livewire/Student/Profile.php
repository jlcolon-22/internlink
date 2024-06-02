<?php

namespace App\Livewire\Student;

use App\Models\Student;
use Livewire\Component;
use Filament\Actions\Action;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Concerns\InteractsWithActions;

class Profile extends Component implements HasActions,HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    public function modalFormAction(): Action
    {
        return Action::make('modalForm')
            ->label('Edit')
            ->color('success')
            ->form([
                Grid::make([
                    'default'=>2
                ])->schema([
                    TextInput::make('firstname')->required()->default(Auth::guard('student')->user()->firstname),
                    TextInput::make('lastname')->required()->default(Auth::guard('student')->user()->lastname),
                ]),
                Grid::make([
                    'default'=>2
                ])->schema([
                    TextInput::make('email')->required()->default(Auth::guard('student')->user()->email),
                    TextInput::make('student_number')->required()->default(Auth::guard('student')->user()->student_number),
                ]),
                Grid::make([
                    'default'=>2
                ])->schema([
                    TextInput::make('course')->required()->default(Auth::guard('student')->user()->course),
               TextInput::make('mobile_number')->required()->default(Auth::guard('student')->user()->mobile_number),
                ]),

               TextInput::make('address')->required()->default(Auth::guard('student')->user()->address),
               TextInput::make('password'),


            ])
            ->action(function($data){
                $student = Student::where('id',Auth::guard('student')->id())->first();
                $student->update([
                    'firstname' => $data['firstname'],
                    'lastname' => $data['lastname'],
                    'student_number' => $data['student_number'],
                    'mobile_number' => $data['mobile_number'],
                    'email' => $data['email'],
                    'course' => $data['course'],
                    'address' => $data['address'],
                ]);
                if(!!$data['password'])
                {
                    $student->update([
                        'password' => Hash::make($data['password']),
                    ]);
                }
                Notification::make()
            ->title('Updated successfully')
            ->success()
            ->send();
            });
    }
    public function render()
    {
        return view('livewire.student.profile');
    }
}
