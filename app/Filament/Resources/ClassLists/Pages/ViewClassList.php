<?php

namespace App\Filament\Resources\ClassLists\Pages;

use App\Filament\Resources\ClassLists\ClassListResource;
use App\Livewire\StudentsDoNotBelongThisClass;
use App\Livewire\StudentsInThisClass;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewClassList extends ViewRecord
{
    protected static string $resource = ClassListResource::class;
    

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make()
             ->slideOver()
             ->modalWidth('md')
             ->modalHeading('Edit the Class'),
        ];
    }

    public function getHeading(): string|Htmlable|null
    {
        return "Manage " . $this->record->class_name;
    }

    protected function getFooterWidgets(): array
    {
        return [
            StudentsInThisClass::make(['record' => $this->record]),
            StudentsDoNotBelongThisClass::make(['record' => $this->record]),
        ];
    }
}
