<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('school_email')
                    ->email()
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nip')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('gender')->options(["male" => "Laki-Laki", "female" => "Perempuan"])
                    ->required(),
                Forms\Components\DatePicker::make('date_of_birth')
                    ->minDate(now()->subYears(150))->maxDate(now())
                    ->required(),
                Forms\Components\Textarea::make('address')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->createOptionForm([
                        Forms\Components\TextInput::make("name")
                            ->required(),
                        Forms\Components\TextInput::make("base_salary")
                            ->numeric()
                            ->default(0)
                            ->required()
                    ])
                    ->searchable()
                    ->preload()
                    ->relationship("status", "name")
                    ->required(),
                Forms\Components\Select::make('position')->options(['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Guru BK', 'Guru Wali Kelas', 'Guru Pembina OSIS', 'Guru Staf', 'Guru Penggerak', 'Guru Ekstrakurikuler']),
                Select::make('religion')->options([
                    "islam" => "Islam",
                    "hindu" => "Hindu",
                    "buddha" => "Buddha",
                    "konghucu" => "Kong hu cu",
                    "Catholic" => "Katolik",
                    "Protestant" => "Protestan",
                    "other" => "Other",
                ]),
                Forms\Components\TextInput::make('highest_education')
                    ->maxLength(255),
                Forms\Components\TextInput::make('appointment_descree')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('photo')
                    ->avatar()
                    ->image()
                    ->imageEditor()
                    ->directory("teacher_photos"),
                Forms\Components\Textarea::make('teaching_history')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('school_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('religion'),
                Tables\Columns\TextColumn::make('highest_education')
                    ->searchable(),
                Tables\Columns\TextColumn::make('appointment_descree')
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
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
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
