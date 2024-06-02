<?php

namespace App\Livewire\Admin;

use App\Models\Bookmark;
use App\Models\Student;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class Users extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Student::query())

            ->columns([
                TextColumn::make('firstname')->label('Name')->searchable()->state(function($record){

                    return $record->firstname.' '.$record->lastname;
                }),
                TextColumn::make('email'),
                TextColumn::make('mobile_number'),


            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make('edit')->color('success')
                    ->form([
                        Grid::make([
                            'default'=>2
                        ])->schema([
                            TextInput::make('firstname')->required(),
                            TextInput::make('lastname')->required(),
                        ]),
                        Grid::make([
                            'default'=>2
                        ])->schema([
                            TextInput::make('email')->required(),
                            TextInput::make('student_number')->required(),
                        ]),
                        Grid::make([
                            'default'=>2
                        ])->schema([
                            TextInput::make('course')->required(),
                       TextInput::make('mobile_number')->required(),
                        ]),

                       TextInput::make('address')->required(),
                       TextInput::make('passwords')->label('Password'),

                    ])->closeModalByClickingAway(false)
                    ->action(function ($data, $record) {
                        $record->update([
                            'firstname' => $data['firstname'],
                            'lastname' => $data['lastname'],
                            'student_number' => $data['student_number'],
                            'mobile_number' => $data['mobile_number'],
                            'email' => $data['email'],
                            'course' => $data['course'],
                            'address' => $data['address'],
                        ]);
                        if(!!$data['passwords'])
                        {
                            $record->update([
                                'password' => Hash::make($data['passwords']),
                            ]);
                        }
                        Notification::make()
                            ->title('Updated successfully')
                            ->success()
                            ->send();
                    }),
                    DeleteAction::make()->action(function($record){
                        Bookmark::where('student_id',$record->id)->delete();
                        $record->delete();
                        Notification::make()
                        ->title('Deleted successfully')
                        ->success()
                        ->send();
                    })
            ])
            ->bulkActions([

            ])->paginationPageOptions([1, 10, 20]);
    }
    public function render()
    {
        return view('livewire.admin.users');
    }
}
