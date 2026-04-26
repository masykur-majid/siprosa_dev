<?php

namespace App\Filament\Resources\ClassLists\Pages;

use App\Filament\Resources\ClassLists\ClassListResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditClassList extends EditRecord
{
    protected static string $resource = ClassListResource::class;
    protected static ?string $title = 'Edit Class';
    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

   
}
