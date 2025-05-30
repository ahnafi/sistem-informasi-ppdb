<?php

namespace App\Filament\Resources\TeacherStatusResource\Pages;

use App\Filament\Resources\TeacherStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeacherStatuses extends ListRecords
{
    protected static string $resource = TeacherStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
