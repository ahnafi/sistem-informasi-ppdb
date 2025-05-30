<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayrollResource\Pages;
use App\Filament\Resources\PayrollResource\RelationManagers;
use App\Models\Payroll;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayrollResource extends Resource
{
    protected static ?string $model = Payroll::class;

    protected static ?string $navigationIcon = 'heroicon-s-credit-card';
    protected static ?string $navigationGroup = 'Manajemen Gaji';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('teacher_id')
                    ->searchable()
                    ->preload()
                    ->relationship('teacher', 'name')
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $teacher = Teacher::find($state);
                        if ($teacher && $teacher->teacherStatus) {
                            $set('base_salary', $teacher->teacherStatus->base_salary);
                        }
                    }),

                Forms\Components\DatePicker::make('date')
                    ->required(),
                Forms\Components\DatePicker::make('payment_date')
                    ->required(),
                Forms\Components\TextInput::make('base_salary')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('allowance')
                    ->numeric(),
                Forms\Components\TextInput::make('deduction')
                    ->numeric(),
                Forms\Components\TextInput::make('total_salary')
                    ->required()
                    ->numeric()
                    ->default(0),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('base_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('allowance')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deduction')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('teacher.name')
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPayrolls::route('/'),
            'create' => Pages\CreatePayroll::route('/create'),
            'edit' => Pages\EditPayroll::route('/{record}/edit'),
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
