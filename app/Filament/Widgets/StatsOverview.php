<?php

namespace App\Filament\Widgets;

use App\Models\Registration;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected ?string $heading = 'Registration';

    protected ?string $description = 'An overview of some analytics.';
    protected function getStats(): array
    {
        $now = now();
        $startOfMonth = $now->copy()->startOfMonth();
        $endOfMonth = $now->copy()->endOfMonth();
        return [
            Stat::make('Registration Pending', Registration::where('status', 'pending')->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count())
                ->description('Number of applicants still awaiting verification')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning')
                ->icon('heroicon-o-user-group'),
            Stat::make('Registration Accepted', Registration::where('status', 'accepted')->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count())
                ->description('Number of applicants accepted this month')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success')
                ->icon('heroicon-o-user-plus'),
            Stat::make('Registration Rejected', Registration::where('status', 'rejected')->whereBetween('created_at', [$startOfMonth, $endOfMonth])->count())
                ->description('Number of applicants rejected this month')
                ->descriptionIcon('heroicon-m-x-circle')
                ->color('danger')
                ->icon('heroicon-o-user-minus'),
        ];
    }

    protected static ?string $pollingInterval = '600s';
}
