<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassroomResource\Pages;
use App\Filament\Resources\ClassroomResource\RelationManagers;
use App\Models\Classroom;
use App\Models\Student;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification; // Tambahkan ini
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassroomResource extends Resource
{
    protected static ?string $model = Classroom::class;
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Manajemen Kelas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Kelas')
                            ->required()
                            ->maxLength(255),
                            
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('academic_year')
                                    ->label('Tahun Ajaran')
                                    ->required()
                                    ->placeholder('2025/2026')
                                    ->maxLength(255),
                                
                                Forms\Components\TextInput::make('grade_level')
                                    ->label('Tingkat Kelas')
                                    ->required()
                                    ->placeholder('X / 10 / Kelas 10')
                                    ->maxLength(255),
                            ]),
                            
                        Forms\Components\Grid::make()
                            ->schema([
                                Forms\Components\TextInput::make('specialization')
                                    ->label('Jurusan/Peminatan')
                                    ->placeholder('IPA / IPS / Bahasa')
                                    ->maxLength(255),
                                
                                Forms\Components\TextInput::make('capacity')
                                    ->label('Kapasitas Kelas')
                                    ->numeric()
                                    ->default(30)
                                    ->minValue(1)
                                    ->required(),
                            ]),
                            
                        Forms\Components\Select::make('homeroom_teacher_id')
                            ->label('Wali Kelas')
                            ->relationship('homeroomTeacher', 'name')
                            ->searchable()
                            ->preload(),
                            
                        Forms\Components\TextInput::make('room')
                            ->label('Ruang Kelas')
                            ->maxLength(255),
                            
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(3)
                            ->columnSpan('full'),
                            
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options([
                                'active' => 'Aktif',
                                'inactive' => 'Tidak Aktif',
                            ])
                            ->default('active')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                    ->label('Tingkat Kelas')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('specialization')
                    ->label('Jurusan')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('homeroomTeacher.name')
                    ->label('Wali Kelas')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('students_count')
                    ->label('Jumlah Siswa')
                    ->counts('students')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('capacity')
                    ->label('Kapasitas')
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'danger',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('academic_year')
                    ->label('Tahun Ajaran')
                    ->options(function() {
                        return Classroom::distinct()->pluck('academic_year', 'academic_year')->toArray();
                    }),
                    
                Tables\Filters\SelectFilter::make('grade_level')
                    ->label('Tingkat')
                    ->options(function() {
                        return Classroom::distinct()->pluck('grade_level', 'grade_level')->toArray();
                    }),
                    
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Aktif',
                        'inactive' => 'Tidak Aktif',
                    ]),
                    
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('manage_students')
                    ->label('Kelola Siswa')
                    ->icon('heroicon-o-user-group')
                    ->color('success')
                    ->modalHeading(fn (Classroom $record): string => "Penempatan Siswa: Kelas {$record->name}")
                    ->modalDescription(fn (Classroom $record): string => "Kapasitas: {$record->students()->count()}/{$record->capacity} siswa")
                    ->modalSubmitActionLabel('Simpan Perubahan')
                    ->form(function (Classroom $record) {
                        return [
                            Forms\Components\Tabs::make('Pengelolaan Siswa')
                                ->tabs([
                                    Forms\Components\Tabs\Tab::make('Tambah Siswa')
                                        ->icon('heroicon-o-user-plus')
                                        ->schema([
                                            Forms\Components\TextInput::make('search_available')
                                                ->label('Cari Siswa')
                                                ->placeholder('Nama, NIS, Email...')
                                                ->live(debounce: 300)
                                                ->afterStateUpdated(function ($state, $set) {
                                                    $set('available_students', 
                                                        Student::whereNull('classroom_id')
                                                            ->where(function ($query) use ($state) {
                                                                $query->where('name', 'like', "%{$state}%")
                                                                    ->orWhere('nis', 'like', "%{$state}%")
                                                                    ->orWhere('school_email', 'like', "%{$state}%");
                                                            })
                                                            ->orderBy('name')
                                                            ->limit(50)
                                                            ->get()
                                                            ->pluck('name', 'id')
                                                            ->toArray()
                                                    );
                                                }),
                                                
                                            Forms\Components\CheckboxList::make('student_ids')
                                                ->label('Siswa Tersedia')
                                                ->options(function (callable $get) {
                                                    if ($get('search_available')) {
                                                        return $get('available_students') ?? [];
                                                    }
                                                    
                                                    return Student::whereNull('classroom_id')
                                                        ->orderBy('name')
                                                        ->limit(50)
                                                        ->get()
                                                        ->pluck('name', 'id')
                                                        ->toArray();
                                                })
                                                ->searchable()
                                                ->bulkToggleable()
                                                ->columns(1)
                                                ->gridDirection('row')
                                                ->helperText('Pilih siswa yang akan ditambahkan ke kelas ini'),
                                                
                                            Forms\Components\Hidden::make('available_students'),
                                        ]),
                                        
                                    Forms\Components\Tabs\Tab::make('Kelola Siswa Kelas')
                                        ->icon('heroicon-o-users')
                                        ->schema([
                                            Forms\Components\TextInput::make('search_current')
                                                ->label('Cari Siswa Kelas')
                                                ->placeholder('Nama, NIS, Email...')
                                                ->live(debounce: 300)
                                                ->afterStateUpdated(function ($state, $set, Classroom $record) {
                                                    $set('current_students', 
                                                        Student::where('classroom_id', $record->id)
                                                            ->where(function ($query) use ($state) {
                                                                $query->where('name', 'like', "%{$state}%")
                                                                    ->orWhere('nis', 'like', "%{$state}%")
                                                                    ->orWhere('school_email', 'like', "%{$state}%");
                                                            })
                                                            ->orderBy('name')
                                                            ->get()
                                                            ->pluck('name', 'id')
                                                            ->toArray()
                                                    );
                                                }),
                                                
                                            Forms\Components\CheckboxList::make('remove_student_ids')
                                                ->label('Siswa dalam Kelas')
                                                ->options(function (callable $get, Classroom $record) {
                                                    if ($get('search_current')) {
                                                        return $get('current_students') ?? [];
                                                    }
                                                    
                                                    return Student::where('classroom_id', $record->id)
                                                        ->orderBy('name')
                                                        ->get()
                                                        ->pluck('name', 'id')
                                                        ->toArray();
                                                })
                                                ->searchable()
                                                ->bulkToggleable()
                                                ->columns(1)
                                                ->gridDirection('row')
                                                ->helperText('Centang siswa yang ingin dikeluarkan dari kelas ini'),
                                                
                                            Forms\Components\Hidden::make('current_students'),
                                        ]),
                                ])
                                ->columnSpanFull(),
                        ];
                    })
                    ->action(function (array $data, Classroom $record): void {
                        $currentCount = $record->students()->count();
                        $availableCapacity = $record->capacity - $currentCount;
                        
                        // Process adding students
                        $addCount = 0;
                        if (!empty($data['student_ids'])) {
                            $selectedToAdd = count($data['student_ids']);
                            
                            if ($selectedToAdd > $availableCapacity) {
                                Notification::make()
                                    ->title('Kapasitas Tidak Cukup')
                                    ->body("Hanya {$availableCapacity} siswa yang dapat ditambahkan ke kelas ini.")
                                    ->warning()
                                    ->send();
                                    
                                // Only add up to capacity
                                $data['student_ids'] = array_slice($data['student_ids'], 0, $availableCapacity);
                            }
                            
                            // Add students to class
                            Student::whereIn('id', $data['student_ids'])->update(['classroom_id' => $record->id]);
                            $addCount = count($data['student_ids']);
                        }
                        
                        // Process removing students
                        $removeCount = 0;
                        if (!empty($data['remove_student_ids'])) {
                            Student::whereIn('id', $data['remove_student_ids'])->update(['classroom_id' => null]);
                            $removeCount = count($data['remove_student_ids']);
                        }
                        
                        $message = [];
                        if ($addCount > 0) {
                            $message[] = "{$addCount} siswa ditambahkan ke kelas";
                        }
                        
                        if ($removeCount > 0) {
                            $message[] = "{$removeCount} siswa dikeluarkan dari kelas";
                        }
                        
                        if (!empty($message)) {
                            Notification::make()
                                ->title('Berhasil')
                                ->body(implode(' dan ', $message))
                                ->success()
                                ->send();
                        } else {
                            Notification::make()
                                ->title('Tidak Ada Perubahan')
                                ->body('Tidak ada perubahan pada siswa kelas')
                                ->info()
                                ->send();
                        }
                    }),
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
            ClassroomResource\RelationManagers\StudentsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClassrooms::route('/'),
            'create' => Pages\CreateClassroom::route('/create'),
            'edit' => Pages\EditClassroom::route('/{record}/edit'),
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
