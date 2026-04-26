<?php

namespace App\Filament\Resources\Vocations\Pages;

use App\Filament\Resources\Vocations\VocationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVocation extends EditRecord
{
    protected static string $resource = VocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
