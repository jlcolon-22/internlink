<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;

use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use App\Models\Company as ModelCompany;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use App\Filament\Exports\CompanyExporter;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Actions\Exports\Models\Export;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Exports\Enums\ExportFormat;
use Filament\Tables\Concerns\InteractsWithTable;

class Company extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;
    public function table(Table $table): Table
    {
        return $table
            ->query(ModelCompany::query())
            ->headerActions([
                ExportAction::make('SS')->exporter(CompanyExporter::class),
                Action::make('add')->label('Create Company')->color('pup')
                    ->form([
                        TextInput::make('company_name')->required(),
                        Grid::make([
                            'default' => 2
                        ])->schema([
                            TextInput::make('company_email')->required(),
                            TextInput::make('company_contact_number')->required(),
                        ]),
                        Grid::make([
                            'default' => 2
                        ])->schema([
                            TextInput::make('company_employer_name')->required(),
                            Select::make('status')->options([
                                '1' => 'Active',
                                '0' => 'Inactive'
                            ])->default(1)->required(),
                        ]),

                        Grid::make([
                            'default' => 2
                        ])->schema([
                            FileUpload::make('company_profile')->directory('/company/profile')->required(),
                            FileUpload::make('company_background')->directory('/company/background')->required(),
                        ]),

                        RichEditor::make('company_description')
                            ->disableToolbarButtons([
                                'blockquote',
                                'attachFiles',
                            ])->required(),
                        Textarea::make('company_address')
                            ->label('Complete Address')
                            ->rows(3)
                            ->cols(20)->required(),
                        TextInput::make('company_password')->required()->password()->revealable(),

                    ])->closeModalByClickingAway(false)
                    ->action(function ($data) {
                        ModelCompany::query()->create([
                            'company_name' => $data['company_name'],
                            'company_email' => $data['company_email'],
                            'company_contact_number' => $data['company_contact_number'],
                            'company_employer_name' => $data['company_employer_name'],
                            'status' => $data['status'],
                            'company_profile' => $data['company_profile'],
                            'company_background' => $data['company_background'],
                            'company_description' => $data['company_description'],
                            'company_address' => $data['company_address'],
                            'password' => Hash::make($data['company_password']),
                        ]);
                        Notification::make()
                            ->title('Created successfully')
                            ->success()
                            ->send();
                    })
            ])
            ->columns([
                TextColumn::make('company_name')->searchable(),
                TextColumn::make('company_address'),
                TextColumn::make('company_email'),

                BooleanColumn::make('status')->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make('edit')->color('success')
                    ->form([
                        TextInput::make('company_name')->required(),
                        Grid::make([
                            'default' => 2
                        ])->schema([
                            TextInput::make('company_email')->required(),
                            TextInput::make('company_contact_number')->required(),
                        ]),
                        Grid::make([
                            'default' => 2
                        ])->schema([
                            TextInput::make('company_employer_name')->required(),
                            Select::make('status')->options([
                                '1' => 'Active',
                                '0' => 'Inactive'
                            ])->default(1)->required(),
                        ]),

                        Grid::make([
                            'default' => 2
                        ])->schema([
                            FileUpload::make('company_profile')->directory('/company/profile')->required(),
                            FileUpload::make('company_background')->directory('/company/background')->required(),
                        ]),

                        RichEditor::make('company_description')
                            ->disableToolbarButtons([
                                'blockquote',
                                'attachFiles',
                            ])->required(),
                        Textarea::make('company_address')
                            ->label('Complete Address')
                            ->rows(3)
                            ->cols(20)->required(),
                        TextInput::make('company_passwords')->label('Company Password')->password()->revealable(),

                    ])->closeModalByClickingAway(false)
                    ->action(function ($data, $record) {
                        $record->update([
                            'company_name' => $data['company_name'],
                            'company_email' => $data['company_email'],
                            'company_contact_number' => $data['company_contact_number'],
                            'company_employer_name' => $data['company_employer_name'],
                            'status' => $data['status'],
                            'company_profile' => $data['company_profile'],
                            'company_background' => $data['company_background'],
                            'company_description' => $data['company_description'],
                            'company_address' => $data['company_address'],

                        ]);
                        if (!!$data['company_passwords']) {
                            $record->update([
                                'password' => Hash::make($data['company_passwords']),
                            ]);
                        }
                        Notification::make()
                            ->title('Updated successfully')
                            ->success()
                            ->send();
                    }),
                Action::make('message')->action(function ($record) {

                    $check = \App\Models\Convo::where('admin_id',Auth::guard('web')->id())->where('user_id',$record->id)->first();
                    if (!$check) {
                        $convo = \App\Models\Convo::create([
                            'admin_id' => Auth::guard('web')->id(),
                            'user_id' => $record->id,
                            'type'=>'company'
                        ]);

                        return redirect()->route('admin.message',['id'=>$convo->id]);
                    }
                     return redirect()->route('admin.message',['id'=>$check->id]);
                }),
            ])
            ->bulkActions([])->paginationPageOptions([1, 10, 20]);
    }
    public function render()
    {
        return view('livewire.admin.company');
    }
}
