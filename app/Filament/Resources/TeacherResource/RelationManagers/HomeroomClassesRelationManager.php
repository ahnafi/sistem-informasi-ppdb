<?php

namespace App\Filament\Resources\TeacherResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeroomClassesRelationManager extends RelationManager
{
    protected static string $relationship = 'homeroomClasses';
    
    protected static ?string $title = 'Kelas yang Diwalikan';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Kelas')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('grade_level')
                    ->label('Tingkat Kelas')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Kelas')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('grade_level')
                    ->label('Tingkat')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('students_count')
                    ->label('Jumlah Siswa')
                    ->counts('students'),
                    
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Usually, you would assign teachers as homeroom teachers from the Classroom resource
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }
}