<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use App\Models\Student;
use App\Services\Nis;
use App\Services\SchoolEmail;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;
    protected static ?string $navigationGroup = 'Manajemen Registrasi';
    protected static ?string $navigationIcon = 'heroicon-s-document-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Diri Siswa')
                    ->schema([
                        TextInput::make('email')->email()->required()->maxLength(255),
                        TextInput::make('name')->required()->maxLength(255),
                        Select::make('gender')->options(["male" => "Laki-Laki", "female" => "Perempuan"])->required(),
                        TextInput::make('place_of_birth')->required()->maxLength(255),
                        DatePicker::make('date_of_birth')
                            ->required()
                            ->minDate(now()->subYears(30))
                            ->maxDate(now()->subYears(10)),
                        TextInput::make('village_district_province')->required()->maxLength(255),
                        TextInput::make('address')->required()->maxLength(255),
                        TextInput::make('phone')->tel()->required()->maxLength(255),
                        TextInput::make('nisn')->required()->maxLength(255),
                        TextInput::make('origin_school')->required()->maxLength(255),
                        Select::make('school_type')->options(["public" => "Negeri", "private" => "Swasta"])->required(),
                        TextInput::make('information')->required()->maxLength(255),
                        Forms\Components\ToggleButtons::make('status')
                            ->options([
                                'pending' => 'Pending',
                                'accepted' => 'Accepted',
                                'rejected' => 'Rejected',
                            ])
                            ->colors([
                                'success' => 'accepted',
                                'warning' => 'pending',
                                'danger' => 'rejected',
                            ])
                            ->inline()
                            ->visibleOn("view"),
                    ])->columns(2),

                Section::make('Data Periodik Siswa')
                    ->schema([
                        Group::make()->relationship('periodic')->schema([
                            Select::make('religion')->options([
                                "islam" => "Islam",
                                "hindu" => "Hindu",
                                "buddha" => "Buddha",
                                "konghucu" => "Kong hu cu",
                                "Catholic" => "Katolik",
                                "Protestant" => "Protestan",
                                "other" => "Other",
                            ]),
                            Select::make('residence')->options([
                                "Bersama orang tua",
                                "Kost",
                                "Bersama saudara",
                                "Rumah sendiri",
                                "Tidak punya rumah",
                                "Tidur berpindah pindah",
                                "Lain-lain",
                            ]),
                            TextInput::make('height')->numeric()->maxValue(300)->minValue(0),
                            TextInput::make('weight')->numeric()->minValue(0),
                            Select::make('medical_history')->options([true => "Ya", false => "Tidak"]),
                            TextInput::make('home_distance')->numeric()->minValue(0),
                            TextInput::make('travel_time')->numeric()->minValue(0),
                            Select::make('child_status')->options(["biological" => "Kandung", "adopted" => "Adopsi"]),
                            TextInput::make('child_order')->numeric()->minValue(0),
                            TextInput::make('siblings')->numeric()->minValue(0),
                        ])->columns(2),
                    ]),

                Section::make('Prestasi')
                    ->schema([
                        Repeater::make('achievements')->relationship()->schema([
                            Select::make('type')->options(["academic" => "Akademik", "nonacademic" => "Non Akademik"])->required(),
                            TextInput::make('name')->required(),
                            DatePicker::make('year')->format("Y")->minDate(now()->subYears(150))->maxDate(now())->required(),
                            Select::make("ranking")->options([1 => "1", 2 => "2", 3 => "3"])->required(),
                            Select::make("tier")->label("Tingkat")->options([
                                "village" => "Desa",
                                "sub_district" => "Kecamatan",
                                "district" => "Kabupaten",
                                "province" => "Provinsi",
                                "national" => "Nasional",
                                "international" => "Internasional",
                                "world" => "Dunia"
                            ])
                        ])->columns(5),
                    ]),

                Section::make('Data Orang Tua/Wali Murid')
                    ->schema([
                        Repeater::make('studentParents')->relationship()->schema([
                            Select::make('type')->options(["father" => "Ayah", "mother" => "Ibu", "guardian" => "Wali"])->required(),
                            TextInput::make('name')->required(),
                            TextInput::make('phone')->tel(),
                            TextInput::make('village_district_province')->maxLength(255),
                            TextInput::make('address')->nullable(),
                            TextInput::make('job')->nullable(),
                            Select::make("income")->options([
                                "<1" => "<1.000.000",
                                "1-2" => "1.000.000 - 2.000.000",
                                "2-3" => "2.000.000 - 3.000.000",
                                "3-4" => "3.000.000 - 4.000.000",
                                "4-5" => "4.000.000 - 5.000.000",
                                ">5" => ">5.000.000",
                            ])->nullable(),
                        ])->columns(3),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'success' => 'accepted',
                        'warning' => 'pending',
                        'danger' => 'rejected',
                    ]),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('place_of_birth')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('village_district_province')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin_school')
                    ->searchable(),
                Tables\Columns\TextColumn::make('school_type'),
                Tables\Columns\TextColumn::make('information')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
                Tables\Filters\SelectFilter::make("status")
                    ->options([
                        'pending' => 'Pending',
                        'accepted' => 'Accepted',
                        'rejected' => 'Rejected',
                    ]),
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])->icon('heroicon-m-ellipsis-horizontal')->tooltip('Actions'),
                Tables\Actions\Action::make('accept')
                    ->label('Accept')
                    ->icon('heroicon-s-check-circle')
                    ->requiresConfirmation()
                    ->color('success')
                    ->action(function (Model $record) {
                        $record->update([
                            'status' => 'accepted',
                        ]);

                        if (!$record->student) {
                            Student::create([
                                'nis' => Nis::generate($record->id, $record->date_of_birth),
                                'name' => $record->name,
                                'school_email' => SchoolEmail::generate($record->name),
                                'registration_id' => $record->id,
                            ]);
                        }
                        Notification::make()
                            ->title('Student successfully accepted')
                            ->icon('heroicon-o-document-text')
                            ->iconColor('success')
                            ->send();
                    })->visible(function (Model $record) {
                        return $record->status !== 'accepted';
                    }),
                Tables\Actions\Action::make("reject")
                    ->label('Reject')
                    ->icon('heroicon-s-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->visible(function (Model $record) {
                        return $record->status !== 'rejected';
                    })
                    ->action(function (Model $record) {

                        $record->update([
                            'status' => 'rejected',
                        ]);

                        if ($record->student) {
                            $record->student->forceDelete();
                        }
                    }),
            ], position: Tables\Enums\ActionsPosition::BeforeCells);
//            ->bulkActions([
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                    Tables\Actions\ForceDeleteBulkAction::make(),
//                    Tables\Actions\RestoreBulkAction::make(),
//                ]),
//            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
