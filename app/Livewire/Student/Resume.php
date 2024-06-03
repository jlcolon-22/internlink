<?php

namespace App\Livewire\Student;

use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Support\Enums\MaxWidth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Section;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;

class Resume extends Component implements HasForms
{
    use InteractsWithForms;
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('x')
                    ->heading('Online Resume Builder')
                    ->schema([
                        Grid::make([
                            'default' => 3
                        ])->schema([
                            TextInput::make('firstname')
                                ->required(),
                            TextInput::make('middlename')
                                ->required(),
                            TextInput::make('lastname')
                                ->required(),
                        ]),
                        FileUpload::make('profile')->required(),
                        Grid::make([
                            'default' => 3
                        ])->schema([
                            TextInput::make('linkedin')->url(),
                            TextInput::make('github')->url(),
                            TextInput::make('facebook')->url(),
                        ]),
                        Grid::make([
                            'default' => 3
                        ])->schema([
                            TextInput::make('mobile_phone')->url(),
                            TextInput::make('course')->url(),
                            TextInput::make('student_number')->url(),
                        ]),
                        Fieldset::make('Elementary School')->schema([
                            Grid::make([
                                'default' => 3
                            ])->schema([
                                TextInput::make('e_school_name')->label('School Name'),
                                TextInput::make('e_start')->label(' Elementary Start Date')->type('month'),
                                TextInput::make('e_end')->label('Elementary End Date')->type('month'),
                            ])
                        ]),
                        Fieldset::make('Junior School')->schema([
                            Grid::make([
                                'default' => 3
                            ])->schema([
                                TextInput::make('j_school_name')->label('School Name'),
                                TextInput::make('j_start')->label(' Junior Start Date')->type('month'),
                                TextInput::make('j_end')->label('Junior End Date')->type('month'),
                            ])
                        ]),
                        Fieldset::make('Senior School')->schema([
                            Grid::make([
                                'default' => 3
                            ])->schema([
                                TextInput::make('s_school_name')->label('School Name'),
                                TextInput::make('s_start')->label(' Senior Start Date')->type('month'),
                                TextInput::make('s_end')->label('Senior End Date')->type('month'),
                            ])
                        ]),
                        Fieldset::make('College')->schema([
                            Grid::make([
                                'default' => 2
                            ])->schema([
                                TextInput::make('c_school_name')->label('School Name'),
                                TextInput::make('c_start')->label(' College Start Date')->type('month'),

                            ])
                        ]),
                        Fieldset::make('Programming Skills')->schema([
                            Grid::make([
                                'default' => 2
                            ])->schema([
                                Select::make('skill1')->label('Skill 1')
                                    ->options([
                                        'Python' => 'Python',
                                        'Java' => 'Java',
                                        'JavaScript' => 'JavaScript',
                                        'C++' => 'C++',
                                        'C#' => 'C#',
                                        'Ruby' => 'Ruby',
                                        'PHP' => 'PHP',
                                        'Swift' => 'Swift',
                                        'Kotlin' => 'Kotlin',
                                        'Go' => 'Go',
                                        'TypeScript' => 'TypeScript',
                                        'HTML' => 'HTML',
                                        'CSS' => 'CSS',
                                        'React.js' => 'React.js',
                                        'Angular' => 'Angular',
                                        'Vue.js' => 'Vue.js',
                                        'Node.js' => 'Node.js',
                                        'Express.js' => 'Express.js',
                                        'Django' => 'Django',
                                        'Flask' => 'Flask',
                                        'Bootstrap' => 'Bootstrap',
                                    ])
                                    ->required(),
                                TextInput::make('ratings1')->label('Rating (%)'),
                                Select::make('skill2')->label('Skill 2')
                                    ->options([
                                        'Python' => 'Python',
                                        'Java' => 'Java',
                                        'JavaScript' => 'JavaScript',
                                        'C++' => 'C++',
                                        'C#' => 'C#',
                                        'Ruby' => 'Ruby',
                                        'PHP' => 'PHP',
                                        'Swift' => 'Swift',
                                        'Kotlin' => 'Kotlin',
                                        'Go' => 'Go',
                                        'TypeScript' => 'TypeScript',
                                        'HTML' => 'HTML',
                                        'CSS' => 'CSS',
                                        'React.js' => 'React.js',
                                        'Angular' => 'Angular',
                                        'Vue.js' => 'Vue.js',
                                        'Node.js' => 'Node.js',
                                        'Express.js' => 'Express.js',
                                        'Django' => 'Django',
                                        'Flask' => 'Flask',
                                        'Bootstrap' => 'Bootstrap',
                                    ])
                                    ->required(),
                                TextInput::make('ratings2')->label('Rating (%)'),
                                Select::make('skill3')->label('Skill 3')
                                    ->options([
                                        'Python' => 'Python',
                                        'Java' => 'Java',
                                        'JavaScript' => 'JavaScript',
                                        'C++' => 'C++',
                                        'C#' => 'C#',
                                        'Ruby' => 'Ruby',
                                        'PHP' => 'PHP',
                                        'Swift' => 'Swift',
                                        'Kotlin' => 'Kotlin',
                                        'Go' => 'Go',
                                        'TypeScript' => 'TypeScript',
                                        'HTML' => 'HTML',
                                        'CSS' => 'CSS',
                                        'React.js' => 'React.js',
                                        'Angular' => 'Angular',
                                        'Vue.js' => 'Vue.js',
                                        'Node.js' => 'Node.js',
                                        'Express.js' => 'Express.js',
                                        'Django' => 'Django',
                                        'Flask' => 'Flask',
                                        'Bootstrap' => 'Bootstrap',
                                    ])
                                    ->required(),
                                TextInput::make('ratings3')->label('Rating (%)'),
                                Select::make('skill4')->label('Skill 4')
                                    ->options([
                                        'Python' => 'Python',
                                        'Java' => 'Java',
                                        'JavaScript' => 'JavaScript',
                                        'C++' => 'C++',
                                        'C#' => 'C#',
                                        'Ruby' => 'Ruby',
                                        'PHP' => 'PHP',
                                        'Swift' => 'Swift',
                                        'Kotlin' => 'Kotlin',
                                        'Go' => 'Go',
                                        'TypeScript' => 'TypeScript',
                                        'HTML' => 'HTML',
                                        'CSS' => 'CSS',
                                        'React.js' => 'React.js',
                                        'Angular' => 'Angular',
                                        'Vue.js' => 'Vue.js',
                                        'Node.js' => 'Node.js',
                                        'Express.js' => 'Express.js',
                                        'Django' => 'Django',
                                        'Flask' => 'Flask',
                                        'Bootstrap' => 'Bootstrap',
                                    ])
                                    ->required(),
                                TextInput::make('ratings4')->label('Rating (%)'),
                                Select::make('skill5')->label('Skill 5')
                                ->options([
                                    'Python' => 'Python',
                                    'Java' => 'Java',
                                    'JavaScript' => 'JavaScript',
                                    'C++' => 'C++',
                                    'C#' => 'C#',
                                    'Ruby' => 'Ruby',
                                    'PHP' => 'PHP',
                                    'Swift' => 'Swift',
                                    'Kotlin' => 'Kotlin',
                                    'Go' => 'Go',
                                    'TypeScript' => 'TypeScript',
                                    'HTML' => 'HTML',
                                    'CSS' => 'CSS',
                                    'React.js' => 'React.js',
                                    'Angular' => 'Angular',
                                    'Vue.js' => 'Vue.js',
                                    'Node.js' => 'Node.js',
                                    'Express.js' => 'Express.js',
                                    'Django' => 'Django',
                                    'Flask' => 'Flask',
                                    'Bootstrap' => 'Bootstrap',
                                ])
                                ->required(),
                            TextInput::make('ratings5')->label('Rating (%)'),

                            ])
                        ]),


                    ])->columnSpanFull()

                // ...
            ])
            ->statePath('data');
    }
    public function render()
    {
        return view('livewire.student.resume');
    }
}
