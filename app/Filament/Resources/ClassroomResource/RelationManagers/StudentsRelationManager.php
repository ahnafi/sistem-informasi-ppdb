<?php

namespace App\Filament\Resources\ClassroomResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use App\Models\Student;

class StudentsRelationManager extends RelationManager
{
    protected static string $relationship = 'students';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')
                    ->label('Siswa')
                    ->options(function() {
                        return Student::whereNull('classroom_id')
                            ->orWhere('classroom_id', $this->ownerRecord->id)
                            ->pluck('name', 'id');
                    })
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('nis')
                    ->label('NIS')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('school_email')
                    ->label('Email Sekolah')
                    ->searchable(),
                    
                Tables\Columns\ImageColumn::make('avatar')
                    ->label('Foto')
                    ->circular(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->label('Tambah Siswa ke Kelas')
                    ->preloadRecordSelect()
                    ->form(fn (Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->label('Siswa')
                            ->options(function() {
                                return Student::whereNull('classroom_id')
                                    ->pluck('name', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->required(),
                    ])
            ])
            ->actions([
                Tables\Actions\Action::make('remove_from_class')
                    ->label('Hapus dari Kelas')
                    ->color('danger')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->action(function (Student $record) {
                        $record->update(['classroom_id' => null]);
                    }),
                
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\BulkAction::make('remove_selected_from_class')
                        ->label('Hapus yang Dipilih dari Kelas')
                        ->color('danger')
                        ->icon('heroicon-o-trash')
                        ->requiresConfirmation()
                        ->action(fn (Collection $records) => $records->each->update(['classroom_id' => null])),
                ]),
            ]);
    }
}