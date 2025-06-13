<?php

namespace App\Filament\Widgets;

use App\Models\Teacher;
use App\Models\Student;
use App\Models\Classroom;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PeopleOverview extends BaseWidget
{

    protected ?string $heading = 'People';

    protected ?string $description = 'An overview of some analytics.';

    protected function getStats(): array
    {
        return [
            // Count from Teacher model
            Stat::make('Total Teachers', Teacher::count())
                ->description('Total registered teachers')
                ->color('info')
                ->icon('heroicon-o-user-group'),
            // Count from Student model
            Stat::make('Total Students', Student::count())
                ->description('Total registered students')
                ->color('success')
                ->icon('heroicon-o-academic-cap'),
            // Count from Classroom model
            Stat::make('Total Classes', Classroom::count())
                ->description('Total active classes')
                ->color('warning')
                ->icon('heroicon-o-home-modern'),
        ];
    }
}
