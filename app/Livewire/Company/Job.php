<?php

namespace App\Livewire\Company;

use App\Models\Company;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class Job extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public function table(Table $table): Table
    {
        return $table
            ->query(\App\Models\Job::query()->where('company_id',Auth::guard('company')->id()))
            ->headerActions([
                Action::make('add')->label('Create Job')->color('pup')
                    ->form([
                        TextInput::make('job_title')->required(),
                        Grid::make([
                            'default' => 2
                        ])->schema([
                            Select::make('category')->options([
                                'Software' => 'Software',
                                'Web Development' => 'Web Development',
                                'UI/UX Design' => 'UI/UX Design',
                                'Software Development' => 'Software Development',
                                'Database Administration' => 'Database Administration',
                                'Network Administration' => 'Network Administration',
                                'System Administration' => 'System Administration',
                                'Cybersecurity' => 'Cybersecurity',
                                'Cloud Computing' => 'Cloud Computing',
                                'Data Science and Analytics' => 'Data Science and Analytics',
                                'IT Support and Helpdesk' => 'IT Support and Helpdesk',
                                'Project Management' => 'Project Management',
                            ])->required(),
                            Select::make('location')->options([
                                'Manila' => 'Manila',
                                'Quezon City' => 'Quezon City',
                                'Caloocan' => 'Caloocan',
                                'Las Piñas' => 'Las Piñas',
                                'Makati' => 'Makati',
                                'Malabon' => 'Malabon',
                                'Mandaluyong' => 'Mandaluyong',
                                'Marikina' => 'Marikina',
                                'Muntinlupa' => 'Muntinlupa',
                                'Navotas' => 'Navotas',
                                'Parañaque' => 'Parañaque',
                                'Pasay' => 'Pasay',
                                'Pasig' => 'Pasig',
                                'Pateros' => 'Pateros',
                                'San Juan' => 'San Juan',
                                'Taguig' => 'Taguig',
                                'Valenzuela' => 'Valenzuela',
                            ])->required(),
                        ]),




                        RichEditor::make('description')
                            ->disableToolbarButtons([
                                'blockquote',
                                'attachFiles',
                            ])->required(),


                    ])->closeModalByClickingAway(false)
                    ->action(function ($data) {
                        \App\Models\Job::query()->create([
                            'job_title'=>$data['job_title'],
                            'category'=>$data['category'],
                            'location'=>$data['location'],
                            'description'=>$data['description'],
                            'company_id'=>Auth::guard('company')->id(),
                        ]);
                        Notification::make()
                            ->title('Created successfully')
                            ->success()
                            ->send();
                    })
            ])
            ->columns([
                TextColumn::make('job_title')->searchable(),
                TextColumn::make('category'),
                TextColumn::make('location'),


            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make('edit')->color('success')
                ->form([
                    TextInput::make('job_title')->required(),
                    Grid::make([
                        'default' => 2
                    ])->schema([
                        Select::make('category')->options([
                            'Software' => 'Software',
                            'Web Development' => 'Web Development',
                            'UI/UX Design' => 'UI/UX Design',
                            'Software Development' => 'Software Development',
                            'Database Administration' => 'Database Administration',
                            'Network Administration' => 'Network Administration',
                            'System Administration' => 'System Administration',
                            'Cybersecurity' => 'Cybersecurity',
                            'Cloud Computing' => 'Cloud Computing',
                            'Data Science and Analytics' => 'Data Science and Analytics',
                            'IT Support and Helpdesk' => 'IT Support and Helpdesk',
                            'Project Management' => 'Project Management',
                        ])->required(),
                        Select::make('location')->options([
                            'Manila' => 'Manila',
                            'Quezon City' => 'Quezon City',
                            'Caloocan' => 'Caloocan',
                            'Las Piñas' => 'Las Piñas',
                            'Makati' => 'Makati',
                            'Malabon' => 'Malabon',
                            'Mandaluyong' => 'Mandaluyong',
                            'Marikina' => 'Marikina',
                            'Muntinlupa' => 'Muntinlupa',
                            'Navotas' => 'Navotas',
                            'Parañaque' => 'Parañaque',
                            'Pasay' => 'Pasay',
                            'Pasig' => 'Pasig',
                            'Pateros' => 'Pateros',
                            'San Juan' => 'San Juan',
                            'Taguig' => 'Taguig',
                            'Valenzuela' => 'Valenzuela',
                        ])->required(),
                    ]),




                    RichEditor::make('description')
                        ->disableToolbarButtons([
                            'blockquote',
                            'attachFiles',
                        ])->required(),


                ])->closeModalByClickingAway(false)
                    ->action(function ($data, $record) {
                        $record->update([
                            'job_title'=>$data['job_title'],
                            'category'=>$data['category'],
                            'location'=>$data['location'],
                            'description'=>$data['description'],
                            'company_id'=>Auth::guard('company')->id(),
                        ]);
                        Notification::make()
                            ->title('Updated successfully')
                            ->success()
                            ->send();
                    }),
                    DeleteAction::make()
            ])
            ->bulkActions([
                // ...
            ])->paginationPageOptions([5, 10, 20]);
    }
    public function render()
    {
        return view('livewire.company.job');
    }
}
