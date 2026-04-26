<?php

namespace App\Filament\Resources\ReadingProgress\Pages;

use App\Filament\Resources\ReadingProgress\ReadingProgressResource;
use App\Livewire\ReadingLogTable;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Icons\Heroicon;

class ViewReadingProgress extends ViewRecord
{
    protected static string $resource = ReadingProgressResource::class;

   protected $listeners = ['refresh-infolist' => 'refreshRecord'];

    protected function getHeaderActions(): array
    {
        
        return [
            DeleteAction::make()
                ->label('Delete this progress')
                ->icon(Heroicon::Trash),
        ];
    }
     protected function getFooterWidgets(): array
     {
        return [
            ReadingLogTable::make(['record' => $this->record]),
        ];
        
     }
    
}
