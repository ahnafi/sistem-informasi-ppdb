<?php

namespace App\Filament\Resources\TeacherStatusResource\Pages;

use App\Filament\Resources\TeacherStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacherStatus extends EditRecord
{
    protected static string $resource = TeacherStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
