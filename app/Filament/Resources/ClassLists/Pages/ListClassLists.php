<?php

namespace App\Filament\Resources\ClassLists\Pages;

use App\Filament\Resources\ClassLists\ClassListResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListClassLists extends ListRecords
{
    protected static string $resource = ClassListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Create New Class')
                ->slideOver()
                ->modalWidth('md'),
        ];
    }
    

}
