<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('registration_id')
                    ->relationship('registration', 'name')
                    ->searchable()
                    ->live()
                    ->reactive()
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        $registration = \App\Models\Registration::with('student')->find($state);

                        if (!$registration) return;

                        if ($registration->student) {
                            Notification::make()
                                ->title('Sudah Terdaftar')
                                ->body('Siswa untuk registrasi ini sudah dibuat sebelumnya.')
                                ->warning()
                                ->persistent()
                                ->send();

                            // Kosongkan kembali agar user tidak bisa lanjut
                            $set('registration_id', null);
                            $set('nis', null);
                            $set('name', null);
                            $set('school_email', null);
                            return;
                        }

                        // Belum ada student, boleh lanjut generate
                        $nis = \App\Services\Nis::generate($registration->id, $registration->date_of_birth);
                        $email = \App\Services\SchoolEmail::generate($registration->name);

                        $set('nis', $nis);
                        $set('name', $registration->name);
                        $set('school_email', $email);
                    })
                    ->required(),


                Forms\Components\TextInput::make('nis')
                    ->required()
                    ->maxLength(255)
                    ->readonly(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('school_email')
                    ->email()
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('avatar')
                    ->avatar()
                    ->directory('students')
                    ->imageEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nis')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('school_email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('avatar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registration.name')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
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
